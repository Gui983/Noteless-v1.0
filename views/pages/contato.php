<?php
    session_start();
    $situacao = $_SESSION['situacao'];

    if($situacao == 'logado'){
        include('templates/contato/bodyContato.php');

        
    }else{
        echo '<h1>Página recusada</h1>';
        echo '<h2>Usuário sem Login</h2>';
    }
?>