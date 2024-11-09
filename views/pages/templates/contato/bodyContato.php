<?php
    if(isset($_POST['acao'])){
        $email = $_SESSION['email'];
        $chamado = $_POST['chamado'];
        $DB = new MySql;
        $DB = $DB->conectar();
        $query = $DB->prepare("INSERT INTO `chamados` VALUES (null,?,?)");

        $query->execute(array($email,$chamado));
    }

?>

<form method="POST">
    <label>Digite abaixo sua dúvida ou questionamento</label>
    <br>
    <textarea style="width:100%;height:40rem" name="chamado"></textarea>
    <button type="submit" name="acao">Abrir Chamado</button>
</form>