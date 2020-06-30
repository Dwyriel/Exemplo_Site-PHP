    <?php 
    if(isset($_POST["msgsbtbtn"]) == true) {
        $nome = $_POST["username"];
        $email = $_POST["useremail"];
        $txt = $_POST["usermsg"];
        include "../config.php";
        $nome = rescape($connect, $nome);
        $txt = rescape($connect, $txt);
        $assunto = rescape($connect, $assunto);
        $sql = "INSERT INTO mensagem(texto, email, nome) VALUE ('$txt', '$email', '$nome');";
        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
        if(mysqli_affected_rows($connect) > 0) {
            $_SESSION['alert'] = 'Feedback enviado!';
            header("location:../Front-end/index.php");
        }
        mysqli_close($connect);
    } else {
        header("location:../Front-end/index.php");
    }
?>
