<?php 
    $idNota = $_GET['id_nota'];
    $email = $_SESSION['email'];
    $dbClass = new MySql();
    $db = $dbClass->conectar();

    $clicouEmSalvarNota = isset($_POST['salvarAction']);
    if($clicouEmSalvarNota){
        $textoDaNota = $_POST['textoDaNota'];
        $sql = $db->prepare("UPDATE `notas` SET nota = ? WHERE id = ? AND email = ?");
        $sql->execute(array($textoDaNota,$idNota,$email));
        sleep(1);
    }
    $sql = $db->prepare("SELECT * FROM `notas` WHERE id = ? AND email = ?");
    $sql->execute(array($idNota,$email));
    $nota = $sql->fetchAll();
?>

<div class="Note" style="margin-bottom:3%">
    <div class="Title">
        <h2>Editando a nota : <?php echo $nota[0]['nome_nota']?></h2>
        <form method="post">
            <textarea class="text" style="width:100%;height:60%;margin-bottom:0.5%;" name="textoDaNota"><?php echo $nota[0]['nota']?></textarea>
            <button type="submit" name="salvarAction" style="float:right;" class="btn btn-success">Salvar</button>
        </form>
    </div>
</div>