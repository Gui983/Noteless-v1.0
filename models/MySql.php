<?php 
    class MySql{
        public $pdo;
        public function conectar()
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=noteless','root','');
            return $this->pdo;
        }
    }


?>