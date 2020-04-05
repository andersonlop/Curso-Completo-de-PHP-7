<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarca($marcha);
}
abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{
		echo "O veiculo acelerou até". $velocidade . "Km/h";
	}
	public function frenar($velocidade)
	{
		echo "O veiculo frenou até". $velocidade . "Km/h";
	}
	public function trocarMarca($marcha)
	{
		echo "O veiculo engatou a marca". $marcha;
	}

}

?>