<?php
    namespace Controllers;

    class CadastroController extends Controller{
        public function __construct()
        {
            $this->view = new \Views\MainView('cadastro','index/header','footer.php');
        }

        function executar(){
            $this->view->render($_POST['titulo'] = 'Página de Cadastro');
        }
    }
?>