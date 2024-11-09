<?php 
    session_start();
    $situacao = $_SESSION['situacao'] ?? 'deslogado';

    if($situacao == 'logado'){
        echo '<script>location.href="'.BASE_URL.'Home"</script>';
        die();
    }else{

        $usuarioIniciouCadastro = isset($_POST['acao']);

        if($usuarioIniciouCadastro){

            $email = strip_tags($_POST['emailCadastrar']);

            $senha = strip_tags($_POST['senhaCadastrar']);

            $validador = new validarSenhas();

            $validacao = $validador->validarSenha($senha);

            if($validacao == 1){
                $cadastro = new Cadastro();

                $cadastro->cadastrar($email,  $senha);
            }else{
                echo '<p class="alert alert-danger text center" >Senha não bate com o padrão.</p>';
            }
        }
    }
?>

    <div>
        <h1 class="text-center">Inicie seu cadastro abaixo:</h1>
    </div>

    <div class="container" style="width:100%">
        <div class="row d-flex container" style="width:100%">
            <div class="espaço1 col text-center"></div>

            <div class="card col" style="width:50rem;margin-top:5rem;height:35rem">
                <div class="card-body d-flex justify-content-center">

                    <form method="post" class="row">
                        <input type="email" name="emailCadastrar" required placeholder="Digite seu email" style="margin-bottom:10%">

                        <br>

                        <input type="password" name="senhaCadastrar" required placeholder="Senha Desejada">
                        
                        <div class="container">
                            <p class="lead text-center text-danger" style="font-size:20px">8 caracteres , um número e um símbolo</p>
                        </div>

                        <br>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="submit" name="acao" class="btn btn-success" value="Se cadastrar" style="font-size:20px;" id="acao">
                        </div>
                        <div class="col-md-4"></div>

                    </form>

                </div>

            </div>

            <div class="espaço2 col"></div>
        </div>
    </div>