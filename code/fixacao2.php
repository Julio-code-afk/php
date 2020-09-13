<?php

    global $salBruto;

     
    

    function INSS(){

        $salBruto = 1500;
        global $valINSS;

        $valINSS =  $salBruto * 0.08;

        echo "<br>Seu desconto do INSS é do valor de: $valINSS reais.";
        
    };

    function IRPF(){

        $salBruto = 1500;
        global $valIRPF;

        $valIRPF = $salBruto * 0.075;

        echo "<br>Seu desconto do IRPF é do valor de: $valIRPF reais.";
        
    };

    function salLiquido(){

        $salBruto = 1500;

        $salLiquido = $salBruto - $valINSS - $valIRPF;

        echo "<br>Seu salário líquido é do valor de: $salLiquido reais.";
    }

    INSS();
    IRPF();
    salLiquido();


?>