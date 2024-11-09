<?php
    class Login extends MySql{

        public function logar($email,$senha)
        {

            try{
                $pdo = $this->conectar();
                
                $dadosUsuario = $pdo->prepare("SELECT * FROM `usuarios` WHERE email = ? AND senha = ?");

                $dadosUsuario->execute(array($email,$senha));

                $usuarioCadastrado = $dadosUsuario->rowCount();

                
                if($usuarioCadastrado == 1){
                    $dadosUsuario->fetchAll();
                    //preciso puxar os dados dele de outra tabela e enviar ao home//

                    echo '<p class="alert alert-success text center" >'.'Usuário encontrado , redirecionando ...'.'</p>';

                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['situacao'] = 'logado';
                    /*Manda ele com as informações*/
                    sleep(2);
                    echo '<script>location.href="'.BASE_URL.'Home"</script>';
                    
                    return($_SESSION['email']);
                    return($_SESSION['senha']);
                    return($_SESSION['situacao']);

                    die();
                }else{
                    echo '<p class="alert alert-danger text center" >'.'Usuário não existente , faça o cadastro <a href="http://localhost/testes/Noteless/" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Cadastrar</a>'.'</p>';
                }

            }catch(Exception $e){
                echo 'Conexão com banco de dados falhou';
            }
        }
    }


?>