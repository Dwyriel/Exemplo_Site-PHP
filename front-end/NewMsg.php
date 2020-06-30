<?php 
$pagtitle = 'Contato';
include "../navbar.php";
if(isset($_SESSION['id'])){
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $hid = "readonly";
} else {
    $hid =$nome = $email = '';
}
?>
    <div class="container d-flex justify-content-center">
    <form method="post" action="../back-end/insertmsg.php">
        <div class="d-flex justify-content-center row mt-2 col-xl-12">        
            <h2>Entre em contato conosco</h2>
        </div>
            <div class="row mt-2">
                <!--Nome-->
                <div class="col-xl-6">
                    <label for="username">Nome: </label>
                    <input required type="text" class="form-control" name="username" maxlength="150" value="<?php echo $nome; ?>" <?php echo $hid; ?>>
                </div>
                <!--Assunto-->
                <div class="col-xl-6">
                    <label for="assunto">Email: </label>
                    <input required type="text" class="form-control" name="useremail" maxlength="150" value="<?php echo $email; ?>" <?php echo $hid; ?>>
                </div>
                <!--Texto-->
                <div class="col-xl-12">
                    <label for="txt">Mensagem: </label>
                    <textarea required class="form-control" name="usermsg"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center row col-xl-12 mt-2">
                <input type="submit" value="Enviar" name="msgsbtbtn" class="mr-2 btn btn-primary">
                <input type="reset" value="Limpar" name="resetbtn" class="ml-2 btn btn-secondary">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
