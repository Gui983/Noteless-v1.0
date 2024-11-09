<?php  
    session_start();
    $situacao = $_SESSION['situacao'];

    if($situacao == 'logado'){
        include('templates/home/bodyHome.php');

        
    }else{
        echo 'Página recusada';
        echo '<h2>Usuário sem Login</h2>';
    }

?>