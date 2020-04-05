<?php

 Class Endereco{

 	private $logradouro;
 	private $numero;
 	private $cidade;

 	public function __construct($a, $b, $c){ 

 		$this->logradouro = $a;
 		$this->numero = $b;
 		$this->cidade = $c;
 	}

 	public function __destruct(){ // usado para desconectar do banco

 		// var_dump("Destruir");
 	}

 	public function __toString(){

 		return $this->logradouro. ", " .$this->numero. " - " .$this->cidade; 
 	}	

 }


 $meuendereco = new Endereco("Rua Ademar Saraiva", "123", "Santos");

 // var_dump($meuendereco);

 // unset($meuendereco);

 echo $meuendereco;

?>