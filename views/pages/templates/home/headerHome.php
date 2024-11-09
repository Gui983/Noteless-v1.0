<?php
    @session_start();
    $usuarioSolicitouLogout = isset($_POST['logout']);

    $redirecionamento = new redirect();

    if($usuarioSolicitouLogout){
            session_unset();
            $redirecionamento->redirecionar('');
            die();
    }
?>

<header class="p-3 bg-dark text-white">

        <form class="container d-flex justify-content-center" method="post">
            <div class="d-flex">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                <li><a href="http://localhost/testes/Noteless/" class="nav-link px-2 text-white" >Página Inicial</a></li>

                <li><a href="https://github.com/Gui983" class="nav-link px-2 text-white">GitHub</a></li>
                <li><a href="http://localhost/testes/Noteless/Ajuda" class="nav-link px-2 text-white">Ajuda</a></li>

                <li><a href="http://localhost/testes/Noteless/Contato" class="nav-link px-2 text-white">Contato</a></li>

                <li><a href="http://localhost/testes/Noteless/Sobre" class="nav-link px-2 text-white">Sobre</a></li>

                <li><a  class="nav-link px-2 text-white"><input type="submit" value="Sair" name="logout"></a></li>
                </ul>
            </div>
        </form>
    </header>