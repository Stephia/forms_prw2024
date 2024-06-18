<?php

    echo "<h2>Cadastro</h2>";
   
    // $_GET['nome_campo']
    // $_POST['nome_campo']

    //Recebe o dado enviado do form
    //por via POST

    $nome = $_POST['nome'];

    echo "<h3>Nome: </h3>";
    echo $nome;

?>