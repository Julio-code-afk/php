<?php  


class Cliente{
	
	private $nome;
	private $email;
	private $idade;
	private $cpf;

	function __construct ($nome, $email){

		$this->nome = $nome;
		$this->email = $email;
	}
	
	function get_nome(){

		return $this->nome;
	}

	function get_email(){

		return $this->email;
	}

	function set_cpf($cpf){

		$this->cpf = $cpf;
	}
	function get_cpf(){

		return $this->cpf;
	}

	function set_anoNasc($anoNasc){

		$this->anoNasc = $anoNasc;
	}
	function get_anoNasc(){

		return $this->anoNasc;
	}
	

}
?>