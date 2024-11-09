<?php

    namespace Controllers;

    class SobreController extends Controller{
        public function __construct(){
            $this->view = new \Views\MainView('sobre','home/headerHome','footer.php');
        }

        public function executar(){
            $this->view->render($_POST['titulo'] = 'Sobre Nós');
        }
    }


?>