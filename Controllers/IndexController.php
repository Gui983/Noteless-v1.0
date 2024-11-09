<?php
    namespace Controllers;

    class IndexController extends Controller{
        public function __construct()
        {
            $this->view = new \Views\MainView('index','index/header','footer.php');
        }

        function executar(){
            $this->view->render($_POST['titulo'] = 'Página Inicial');
        }
    }
?>