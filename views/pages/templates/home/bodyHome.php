<?php
    if(isset($_POST['deletarNota'])){
        $dbClass = new MySql();
        $db = $dbClass->conectar();

        $id = $_POST['idDeletar'];

        $sql = $db->prepare("DELETE FROM `notas` WHERE id = ?");

        $sql->execute(array($id));

        sleep(1);
    }
    
    if(isset($_POST['adicionarNotaAcao'])){
        $email = $_SESSION['email'];
        $nomeDaNota = $_POST['adicionarNotaNome'];
        $nota = '';


        $dbClass = new MySql();
        $db = $dbClass->conectar();

        $sql = $db->prepare("INSERT INTO `notas` VALUES (null,?,?,?)");

        $sql->execute(array($email,$nomeDaNota,'Nota Vazia'));

        sleep(1);
    }

    $notasDoUsuario = new PesquisarNotas();

    $notas = $notasDoUsuario->pesquisar($_SESSION['email']);
?>


<div class="user"><p>Usuário : <?php echo $_SESSION['email']?></p></div>

<div>
<!--Onde ele está-->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" >Noteless</li>
        
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
    </nav>
</div>

<div class="card" style="width:100%">

    <div class="flex-row d-inline-flex">
        <div class="menuNotasTitle mx-auto">
            <h3 class="">Menu de Notas</h3>
        </div>
    </div>

    <div class="Alert">
        <div class="alert alert-danger" role="alert">
            <h5 class="text-center">Delete um por vez !</h5>
        </div>
    </div>

    <div class="addNote">
        <form method="POST" style="float:right">
            <label for="">Nome da nota: </label>
            <input type="text" required name="adicionarNotaNome">
            <input type="submit" name="adicionarNotaAcao" value="+">
        </form>
    </div>

    <div class="card container mx-auto" style="width:100%;margin:0">

            <?php 
                foreach($notas as $key => $value){
            ?>
            <form method="POST" class="notaSingle card flex-row d-inline-flex" id="notaSingle">
                    <div class="col-md-11">
                        <div class="d-flex flex-row">
                            <input required type="checkbox" 
                            value="<?php echo $value[0]?>" name="idDeletar">
                            <p style="margin-left:1%"><a href="<?php echo BASE_URL.'editar?'.'id_nota='.$value[0]?>"><?php echo $value[2]?></a></p>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <input type="submit"  style="height:20px;height:30px" name="deletarNota"  value="Deletar"
                        >
                    </div>
            </form>
            <?php }?>
    </div>
</div>