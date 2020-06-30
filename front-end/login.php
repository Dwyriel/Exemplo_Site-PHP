<?php 
$pagtitle = 'Login';
include "../navbar.php";
if(!empty($_SESSION['alert'])){
    $msg = $_SESSION['alert'];
    echo "<script>alert('$msg');</script>";
    $_SESSION['alert'] = NULL;
}
?>
<body>
    <div class="container">
    <form enctype="multipart/form-data" method="post" action="../back-end/signin.php">
        <div class="d-flex justify-content-center row mt-4 pl-1 col-xl-12">        
            <h1>Login</h1>
        </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="d-flex justify-content-center col-xl-4 mt-1 mr-4" style="flex-direction: column;">
                    <!--login-->
                    <div class="">
                        <label for="userlogin">Login: </label>
                        <input type="text" class="form-control" name="userlogin" maxlength="60" required>
                    </div>
                    <!--password-->
                    <div class="">
                        <label for="userpassword">Senha: </label>
                        <input type="password" class="form-control" name="userpassword" maxlength="20" required>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center row col-xl-12 mt-3">
                <input type="submit" value="Sign in" name="submitbtn" class="mr-2 btn btn-primary">
                <input type="reset" value="Limpar" name="resetbtn" class="ml-2 mr-2 btn btn-secondary">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>