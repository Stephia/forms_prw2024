<?php

    echo "<h2>Cadastro</h2>";
   
    // $_GET['nome_campo']
    // $_POST['nome_campo']

    //Recebe o dado enviado do form
    //por via POST

    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $erro=0;
    if (strlen($username)<5){ 
        echo "O username deve possuir no mínimo 5 caracteres.<br>"; $erro=1;
    }
    if (strlen($senha)<5){ 
        echo "A senha deve possuir no mínimo 5 caracteres.<br>"; $erro=1;
    }
    if(empty($cidade)){ 
        echo "Favor digitar sua cidade<br>"; $erro=1;
    }
    if(strlen($estado)!=2){ 
        echo "Favor digitar seu estado corretamente"; $erro=1;
    }
    //VERIFICA SE NÃO HOUVE ERRO

    if($erro==0){ 
        echo "Todos os dados foram digitados corretamente!";

        echo "<h3>Bem-vind@ " . $nome . "!</h3>";
    }

?>