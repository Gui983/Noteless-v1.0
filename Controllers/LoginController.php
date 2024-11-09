<?php

    namespace Controllers;

    class LoginController extends Controller{
        public function __construct(){
            $this->view = new \Views\MainView('login','index/header','footer.php');
        }

        public function executar(){
            $this->view->render($_POST['titulo'] = 'Área de Login');
        }
    }


?>