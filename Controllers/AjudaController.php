<?php

    namespace Controllers;

    class AjudaController extends Controller{
        public function __construct(){
            $this->view = new \Views\MainView('ajuda','home/headerHome','footer.php');
        }

        public function executar(){
            $this->view->render($_POST['titulo'] = 'Página de Ajuda');
        }
    }


?>