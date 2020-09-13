<?php


class ContaEspecial extends Conta
{
	private $limite = 1000;

	
	function get_saldo()
	{
		return (parent::get_saldo() + $this->limite);
	}
}
?>