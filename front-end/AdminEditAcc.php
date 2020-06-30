<?php 
if(isset($_GET['acc'])){
    $pagtitle = 'Admin - Editar Cadastro';
} else {
    header("location:../Front-end/admin.php");
}
include "../navbar.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
    $id = $_GET['acc'];
    $sql = mysqli_query($connect, "SELECT * FROM usuario WHERE id = '$id';");
    $r = mysqli_fetch_assoc($sql);
    if($r['admin'] == 1){
        $user = 'checked';
        $adm = '';
    } elseif ($r['admin'] == 0) {
        $user = '';
        $adm = 'checked';
    }
    ?>
    <div class="container">
        <div class=" d-flex justify-content-center" style="flex-direction: column;">
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="Admin.php"><h1><span class="badge badge-pill badge-dark">Voltar</span></h1></a></div>
            </div>
        </div>
        <form method="post" action="../back-end/insertacc.php"> 
            <div class="d-flex justify-content-center row mt-2 col-xl-12">        
                <h1>Editar Cadastro: <?php echo $r['login']; ?></h1>
            </div>
                <div class="row mt-2">
                <input type="number" value="<?php echo $r['id']; ?>" name="id" hidden> 
                        <!--login-->
                    <div class="col-xl-6">
                        <label for="userlogin">Login: </label>
                        <input type="text" class="form-control" name="userlogin" maxlength="60" value="<?php echo $r['login']; ?>" required>
                    </div>
                    <!--name-->
                    <div class="col-xl-6">
                        <label for="username">Nome: </label>
                        <input type="text" class="form-control" name="username" maxlength="150" value="<?php echo $r['nome']; ?>" required>
                    </div>
                    <!--email-->
                    <div class="col-xl-12">
                        <label for="useremail">Email: </label>
                        <input type="email" class="form-control" name="useremail" maxlength="150" value="<?php echo $r['email']; ?>" required>
                    </div>
                    <div class="d-flex justify-content-center col-xl-12">
                        <div class="mt-2">
                            Privilegio: 
                            <input type="radio" id="user" name="admin" value="1" <?php echo $user; ?>>
                            <label for="user">Usuario</label>
                            <input type="radio" id="adm" name="admin" value="0" <?php echo $adm; ?>>
                            <label for="adm">Administrador</label>
                        </div>
                    </div>
                <div class="d-flex justify-content-center row col-xl-12 mt-2">
                    <input type="submit" value="Enviar" name="submit3btn" class="mr-2 btn btn-primary">
                    <input type="reset" value="Limpar" name="resetbtn" class="mx-2 btn btn-secondary">
                    <a class="ml-2 btn btn-secondary" href="../back-end/del.php?idacc=<?php echo $r['id']; ?>">Deletar</a>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>
    <?php
} else {
    header("location:../Front-end/index.php");
} ?>