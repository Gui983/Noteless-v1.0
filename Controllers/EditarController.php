<?php
    namespace Controllers;

    class EditarController{
        public function __construct()
        {
            $this->view = new \Views\MainView('editar','home/headerHome','footer.php');
        }

        function executar(){
            $this->view->render($_POST['titulo'] = 'Edição de Notas');
        }
    }
?>