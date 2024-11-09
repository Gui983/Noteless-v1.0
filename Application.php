<?php
    class Application{
        public function executar(){
            

            $urlAmigavelSetada = isset($_GET['url']);

            $urlAmigavelBase = $urlAmigavelSetada ? explode('/',$_GET['url'])[0] : 'Index';

            $url = $urlAmigavelBase;

            $url = ucfirst($url).'Controller';

            $controllerSolicitadoExistir = file_exists('Controllers/'.$url.'.php');

            if($controllerSolicitadoExistir){
                $nomeController = 'Controllers\\'.$url;

                $controller = new $nomeController;

                $controller->executar();
            }else{
                die("Página inexistente");
            }
        }
    }

?>