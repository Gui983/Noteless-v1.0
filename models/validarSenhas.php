<?php
    class validarSenhas{
        public function validarSenha($senha){
            $expressao = '/^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{6,15}$/';   
        
            $validacao = preg_match($expressao,$senha);
            
            return $validacao;

        }
    }
?>