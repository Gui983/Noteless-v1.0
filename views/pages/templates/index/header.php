<?php
    $redirecionar = new redirect();
    
    $tentouLogar = isset($_POST['login']);
    $tentouIrCadastro = isset($_POST['cadastro']);

    if($tentouLogar){
        $redirecionar->redirecionar('Login');
        die();
    }
    
    if($tentouIrCadastro){
        $redirecionar->redirecionar('Cadastro');
        die();
    }

?>


<header class="p-3 bg-dark text-white">

        <div class="container">

            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>

                <li><a href="http://localhost/testes/Noteless/Sobre" class="nav-link px-2 text-white">Sobre</a></li>
                <li><a href="http://localhost/testes/Noteless/Ajuda" class="nav-link px-2 text-white">Ajuda</a></li>

                <li><a href="https://github.com/Gui983" class="nav-link px-2 text-white" target="_blank">GitHub</a></li>

                <li><a href="https://getbootstrap.com/" class="nav-link px-2 text-white" target="_blank">Bootstrap</a></li>
                </ul>

                <form method="post" name="acao">
                    <div class="text-end">
                        <button type="submit" class="btn btn-outline-light me-2" name="login">Login</button>
                        
                        <button class="btn btn-warning"  name="cadastro" type="submit">Sign-up</button>
                    </div>
                </form>
            </div>
        </div>
    </header>