<?php
    class PesquisarNotas extends MySql{
        public function pesquisar($email){
            try{
                $pdo = $this->conectar();

                $notasDoUsuario = $pdo->prepare("SELECT * FROM `notas` WHERE email = ?");
                
                $notasDoUsuario->execute(array($email));

                $notas = $notasDoUsuario->fetchAll();

                return $notas;


            }catch (Exception $err){
                echo 'Não foram encontrado Notas para esse usuário !';
            }
        }
    }

?>