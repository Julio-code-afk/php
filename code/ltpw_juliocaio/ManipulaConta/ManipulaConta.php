<?php 

include 'Conta.php';
include 'ContaEspecial.php';
include 'Cliente.php';

    $cliente1 = new Cliente('Julio', 'julio@caio.com');
    $cliente1->set_cpf(12345678910);
    $cliente1->set_anoNasc(19);

    $conta1 = new Conta(111111, $cliente1);
    $contaEspecial1 = new ContaEspecial(222222, $cliente1);

    $conta1->depositar(3000);
    $conta1->sacar(70.99);
    $conta1->transferir(150);

    echo "Nome: " .$cliente1->get_nome(). "<br>";
    echo "Email: " .$cliente1->get_email(). "<br>";
    echo "cpf: " .$cliente1->get_cpf(). "<br>";

    if ($cliente1->get_anoNasc() >= 18) {
    echo "Idade: " .$cliente1->get_anoNasc(). "<br>";
    
    }elseif ($cliente1->get_anoNasc() <= 17) {
	echo "Você não pode fazer uma conta devido a sua idade<br>";
    }

    echo "O saldo da conta1 número " . $conta1->get_numero() . " é o " . $conta1->get_saldo();

    echo "<br>O saldo da contaEspecial número " . $contaEspecial1->get_numero() . " é " . $contaEspecial1->get_saldo();

?>