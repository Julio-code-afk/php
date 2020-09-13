<?php

include "Pessoa.php";

$aluno = new Pessoa;
$alunoI = new Pessoa;


$aluno->set_name('Julio');
$alunoI->set_age('18');

    
    echo "A idade do aluno ". $aluno->get_name(). " é ". $alunoI->get_age();


?>