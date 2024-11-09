<?php
    define('BASE_URL','http://localhost/testes/Noteless/');

    $autoload = function($class){
        try{
            if(file_exists($class.'.php')){
                include($class.'.php');
            }else{
                include('models/'.$class.'.php');      
            }
        }catch(Exception){
            echo 'Erro ao incluir uma classe !';
        }
    };


    spl_autoload_register($autoload);

    $app = new Application();
    $app->executar();
?>