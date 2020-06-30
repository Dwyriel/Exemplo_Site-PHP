<?php 
    include "../config.php";
    if(isset($_POST["submitbtn"]) == true) {
        $bit = 1;
        $nome = $_POST["username"];
        $ps = $_POST["userpassword"];
        $login = $_POST["userlogin"];
        $email = $_POST["useremail"];
        $nome = rescape($connect, $nome);
        $login = rescape($connect, $login);
        $ps = rescape($connect, $ps);
        $email = rescape($connect, $email);
        $check1="SELECT * FROM usuario WHERE email = '$email'" ;
        $check2="SELECT * FROM usuario WHERE login = '$login'" ;
        $rs1 = mysqli_query($connect,$check1);
        $rs2 = mysqli_query($connect,$check2);
        $data1 = mysqli_fetch_array($rs1, MYSQLI_NUM);
        $data2 = mysqli_fetch_array($rs2, MYSQLI_NUM);
        if($data1[0] > 1) {
            echo "<script>alert('Email ja esta sendo utilizado.');</script>";
            header("location:../Front-end/NewAcc.php");
        } else if($data2[0] > 1) {
            echo "<script>alert('Login ja existe.');</script>";
            header("location:../Front-end/NewAcc.php");
        } else {
            $sql = "INSERT INTO usuario(email, login, senha, nome, admin) VALUE ('$email', '$login', MD5('$ps'), '$nome', '$bit');";
            $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
            if(mysqli_affected_rows($connect) > 0) {
                $id = mysqli_insert_id($connect);
                if(!empty($_FILES['prof']['name'])){
                    $arqtype = $_FILES['prof']['type'];
                    $arqtype = rescape($connect, $arqtype);
                    $dir = '../userimg/';
                    $upfile = $dir . basename($_FILES['prof']['name']);
                    if (move_uploaded_file($_FILES['prof']['tmp_name'], $upfile)) {
                        $pathinfo = pathinfo($upfile);
                        $newname = "../userimg/profile".$id.".".$pathinfo['extension'];
                        $arq = "profile".$id.".".$pathinfo['extension'];
                        rename($upfile, $newname);
                        $sql = "INSERT INTO profile(arquivo, tipo, usuario_id) VALUE ('$arq', '$arqtype', '$id');";
                        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    } else {
                        echo "<script> Alert('Algum erro ocorreu, imagem não enviada!');</script>";
                        header("location:../Front-end/NewAcc.php");
                    }
                } else {
                    $arq = 'default.jpg';
                }
                $_SESSION["id"] = $id;
                $_SESSION["login"] = $login;
                $_SESSION["email"] = $email;
                $_SESSION["nome"] = $nome;
                $_SESSION["admin"] = $bit;
                $_SESSION["profimg"] = $arq;
                header("location:../Front-end/index.php");
            }
            mysqli_close($connect);
        }
    } elseif(isset($_POST["submit2btn"])){
        $nome = $_POST["username"];
        $ps = $_POST["userpassword"];
        $login = $_POST["userlogin"];
        $email = $_POST["useremail"];
        $nome = rescape($connect, $nome);
        $login = rescape($connect, $login);
        $ps = rescape($connect, $ps);
        $email = rescape($connect, $email);
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
        } else{
            header("location:../Front-end/index.php");
        }
        if($_SESSION['admin'] == 0){
            $bit = 0;
        } elseif($_SESSION['admin'] == 1){
            $bit = 1;
        }
        $sql = "UPDATE usuario SET email = '$email', login = '$login', senha = MD5('$ps'), nome = '$nome', admin = $bit WHERE id = $id";
        if($q = mysqli_query($connect, $sql)) {
            if(!empty($_FILES['prof']['name'])){
                $arqtype = $_FILES['prof']['type'];
                $arqtype = rescape($connect, $arqtype);
                $dir = '../userimg/';
                $upfile = $dir . basename($_FILES['prof']['name']);
                $profimg = $_SESSION['profimg'];
                $profileimage = $dir . $_SESSION['profimg'];
                $check3 = "SELECT * FROM profile WHERE arquivo = '$profimg';";
                $rs3 = mysqli_query($connect,$check3);
                $data3 = mysqli_fetch_array($rs3, MYSQLI_NUM);
                if($data3[0] > 1) {
                    unlink(realpath($profileimage));
                    if (move_uploaded_file($_FILES['prof']['tmp_name'], $upfile)) {
                        $pathinfo = pathinfo($upfile);
                        $newname = "../userimg/profile".$id.".".$pathinfo['extension'];
                        $arq = "profile".$id.".".$pathinfo['extension'];
                        rename($upfile, $newname);
                        $sql = "UPDATE profile SET arquivo = '$arq', tipo = '$arqtype' WHERE usuario_id = '$id';";
                        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    } else {
                        echo "<script> Alert('Algum erro ocorreu, imagem não enviada!');</script>";
                        header("location:../Front-end/Editaracc.php");
                    }
                } else {
                    if (move_uploaded_file($_FILES['prof']['tmp_name'], $upfile)) {
                        $pathinfo = pathinfo($upfile);
                        $newname = "../userimg/profile".$id.".".$pathinfo['extension'];
                        $arq = "profile".$id.".".$pathinfo['extension'];
                        rename($upfile, $newname);
                        $sql = "INSERT INTO profile(arquivo, tipo, usuario_id) VALUE ('$arq', '$arqtype', '$id');";
                        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    } else {
                        echo "<script> Alert('Algum erro ocorreu, imagem não enviada!');</script>";
                        header("location:../Front-end/Editaracc.php");
                    }
                }
            }elseif(isset($_SESSION['profimg'])){
                $arq = $_SESSION['profimg'];
            } else {
                $arq = 'default.jpg';
            }
            $_SESSION["id"] = $id;
            $_SESSION["login"] = $login;
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $nome;
            $_SESSION["admin"] = $bit;
            $_SESSION["profimg"] = $arq;
            header("location:../Front-end/index.php");
        } else {
            die (mysqli_error($connect));
            header("location:../Front-end/index.php");
        }
    } elseif(isset($_POST["submit3btn"]) && $_SESSION['admin'] == 0){
        $nome = $_POST["username"];
        $login = $_POST["userlogin"];
        $email = $_POST["useremail"];
        $bit = $_POST["admin"];
        $id = $_POST["id"];
        $nome = rescape($connect, $nome);
        $login = rescape($connect, $login);
        $bit = rescape($connect, $bit);
        $id = rescape($connect, $id);
        $email = rescape($connect, $email);
        $sql = "UPDATE usuario SET email = '$email', login = '$login', nome = '$nome', admin = $bit WHERE id = $id";
        if(mysqli_query($connect, $sql)){
            $id = mysqli_insert_id($connect);
            if($_SESSION['id'] == $id){
                $_SESSION["login"] = $login;
                $_SESSION["email"] = $email;
                $_SESSION["nome"] = $nome;
                $_SESSION["admin"] = $bit;
                $_SESSION["id"] = $id;
            }
            header("location:../Front-end/AdminAcc.php");
        } else {
            die (mysqli_error($connect));
        }
    } else {
        header("location:../Front-end/index.php");
    }
?>