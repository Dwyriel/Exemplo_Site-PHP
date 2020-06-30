<?php 
$pagtitle = 'Editar Profile'; include "../navbar.php"; 
if(isset($_SESSION["id"])){
?>
    <div class="container">
    <form enctype="multipart/form-data" method="post" action="../back-end/insertacc.php">
        <div class="d-flex justify-content-center row mt-2 col-xl-12">        
            <h1>Editar Conta</h1>
        </div>
            <div class="row  mt-2">
                <!--login-->
                <div class="col-xl-6">
                    <label for="userlogin">Login: </label>
                    <input type="text" class="form-control" name="userlogin" maxlength="60" value="<?php echo $_SESSION['login']; ?>" required>
                </div>
                <!--name-->
                <div class="col-xl-6">
                    <label for="username">Nome: </label>
                    <input type="text" class="form-control" name="username" maxlength="150" value="<?php echo $_SESSION['nome']; ?>" required>
                </div>
                <!--password-->
                <div class="col-xl-6">
                    <label for="userpassword">Senha: </label>
                    <input type="password" class="form-control" name="userpassword" maxlength="20" placeholder="Confirme sua senha ou insira uma nova" required>
                </div>
                <!--Imagem-->
                <div class="col-xl-6">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    <label for="prof">Enviar imagem: </label>
                    <input type="file" class="form-control" name="prof">
                </div>
                <!--email-->
                <div class="col-xl-12">
                    <label for="useremail">Email: </label>
                    <input type="email" class="form-control" name="useremail" maxlength="150" value="<?php echo $_SESSION['email']; ?>" required>
                </div>
            </div>
            <div class="d-flex justify-content-center row col-xl-12 mt-2">
                <input type="submit" value="Enviar" name="submit2btn" class="mr-2 btn btn-primary">
                <input type="reset" value="Limpar" name="resetbtn" class="ml-2 btn btn-secondary">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<?php } else {
    header("location:index.php");
} ?>