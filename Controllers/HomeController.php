<?php
    namespace Controllers;

    class HomeController extends Controller{
        public function __construct()
        {
            $this->view = new \Views\MainView('home','home/headerHome','footer.php');
        }

        function executar(){
            $this->view->render($_POST['titulo'] = 'Página inicial');
        }
    }
?>