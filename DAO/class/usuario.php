<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;



	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario($value){
		$this->idusuario = $value;
	}
	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;
	}
	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;
	}
	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

	// Começando a conectar com o banco


	// Carregado através do ID do Usuário

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));


	// Verificação se existe ou não
		if (count($results) > 0) {

			$this->setData($results[0]);
		}
		
	}
		// acima apenas carregou os dados para o objeto.


// Metodo que traz uma lista de usuário
	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}


	// Vai buscar umm usuário especifico

	public static function search($login){

		$sql = new Sql();
		
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH'=>"%".$login."%"
		));
	}

	public function login($login, $password){


		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=> $password
		));

		if (count($results) > 0) { // Verificação se existe ou não

			$this->setData($results[0]);

		} else {

			throw new Exception("Login e/ou senha inválidos.");
			
		}

	}

	// Metodo data

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);			
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	public function insert(){

		$sql = new SQL();

		// Criando uma procedures dentro da tabela no banco e aqui chama a procedures.

		// Parâmetro de entrada, sempre no banco começa com p para parâmetro e v para variavel.

		$results = $sql-> select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()

		));

		if(count($results) > 0){
			$this->setData($results[0]);
		}

	}

	public function update($login, $password){

		$this->setDeslogin($login);
		$this->setDessenha($password);		

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdusuario()
		));
	}


public function delete(){

	$sql = new Sql();

	$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
		'ID'=>$this->getIdusuario()
	));

	$this->setIdusuario(0);
	$this->setDeslogin("");
	$this->setDessenha("");
	$this->setDtcadastro(new DateTime());

}

// Metodo contrutor, para receber o login e a senha. o uso de = "" é para que se não tiver os parâmetros, ele funcione novamente.

	public function __construct($login = "", $password = ""){

		$this->setDeslogin($login);
		$this->setDessenha($password);
	}



	// __toString(método mágico), ele da um echo no objeto e trar os dados, os atributos e vez de mostrar a estrutura.

	public function __toString() {

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
}
?>