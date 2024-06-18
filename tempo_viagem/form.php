<?php
    echo "Calculo<br>";
   
    $velMed = $_POST['velMed'];
    $dis = $_POST['dis'];
    $co = $_POST['co'];

    $erro=0;
    if(empty($velMed)){ 
        echo "Favor digitar a velocidade!<br>"; $erro=1;
    }
    if(empty($dis)){ 
        echo "Favor digitar a distância!<br>"; $erro=1;
    }
    if(empty($co)){ 
        echo "Favor digitar o consumo!<br>"; $erro=1;
    }
    //VERIFICA SE NÃO HOUVE ERRO

    if($erro==0){ 
        echo "Todos os dados foram digitados corretamente!<br>";

        $h = $dis/$velMed;
        $h = number_format($h, 2, '.', '');

        echo "Total horas: " . $h . "<br>";

        $Tot = $dis/$co;
        $Tot = number_format($Tot, 2, '.', '');

        echo "Total combustivel: " . $Tot . "<br>";
    }
?>