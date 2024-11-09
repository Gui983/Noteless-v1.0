<?php 
    session_start();
    $situacao = $_SESSION['situacao'] ?? 'deslogado';

    $usuarioIniciouLogin = isset($_POST['acao']);

    if($situacao == 'logado'){
        echo '<script>location.href="'.BASE_URL.'Home"</script>';
        die();
    }
    
    if($usuarioIniciouLogin){
        $email = strip_tags($_POST['emailLogin']);
        $senha = strip_tags($_POST['senhaLogin']);

        $login = new Login();
        $login->logar($email,$senha);
    }
?>

    <div>
        <h1 class="text-center">Faça seu login abaixo:</h1>
    </div>

    <div class="container" style="width:100%">

        <div class="row container d-flex" style="width:100%">
            <div class="espaço1 col">
            </div>

            <div class="col text-center" style="margin-top:5rem;height:35rem;width:100%">
                <div class="card-body d-flex card" style="width:600px;height:500px">

                    <form method="post" class="row">
                        <input type="email" name="emailLogin" required placeholder="Digite seu email" style="margin-bottom:10%">

                        <br>

                        <input type="password" name="senhaLogin" required placeholder="Senha Desejada">
                        
                        <div class="container">
                            <p class="lead text-center text-danger" style="font-size:20px">Forneça seu email e senha cadastrados</p>
                        </div>

                        <br>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="submit" name="acao" class="btn btn-success" value="Login" style="font-size:20px;width:100%" id="acao">
                        </div>

                    </form>

                </div>

            </div>

            <div class="espaço2 col">
            </div>
        </div>
    </div>