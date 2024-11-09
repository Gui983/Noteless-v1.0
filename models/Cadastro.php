<?php
    $MySql = new MySql();

    class Cadastro extends MySql{

        public function cadastrar($email,$senha)
        {
            try{
                $pdo = $this->conectar();

                $dadosUsuario = $pdo->prepare("SELECT * from `usuarios` WHERE email = ? AND senha = ?");
    
                $dadosUsuario->execute(array($email,$senha));

                $usuarioExistente = $dadosUsuario->rowCount();
    
                if($usuarioExistente == 1){
                    echo '<p class="alert alert-danger text center" >'.'Usuário já existente , faça o login <a href="http://localhost/testes/Noteless/" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Logar</a>'.'</p>';
                }else{
                    /* Criar também a parte das notas*/
    
                    $criarCadastroUsuario = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?)");
    
                    $criarCadastroUsuario->execute(array($email,$senha));

                    $criarPrimeiraNota = $pdo->prepare("INSERT INTO `notas` VALUES (null,?,?,?)");
                    $criarPrimeiraNota->execute(array($email,'NotaExemplo','Nota de Exemplo'));

                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['situacao'] = 'logado';

                    echo '<p class="alert alert-success text center" >'.'Usuário sendo criado , redirecionando ...'.'</p>';

                    echo '<script>location.href="'.BASE_URL.'Home"</script>';
                    die();
                }
    
            }catch(Exception $e){
                echo 'Conexão com Banco de dados falhou !!!';
            }
        }
    }
?>