<?php

    namespace Controllers;

    class ContatoController extends Controller{
        public function __construct(){
            $this->view = new \Views\MainView('contato','home/headerHome','footer.php');
        }

        public function executar(){
            $this->view->render($_POST['titulo'] = 'Página de Contato');
        }
    }


?>