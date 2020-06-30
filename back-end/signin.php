<?php include "../config.php"; //colocar em function e fazer isso funcionar
    if(isset($_POST["submitbtn"])){
        $login = $_POST["userlogin"];
        $senha = $_POST["userpassword"];
        $login = rescape($connect, $login);
        $senha = rescape($connect, $senha);
        $check1="SELECT * FROM usuario WHERE login = '$login';" ;
        $check2="SELECT * FROM usuario WHERE senha = MD5('$senha') AND login = '$login';" ;
        $rs1 = mysqli_query($connect,$check1);
        $rs2 = mysqli_query($connect,$check2);
        $data1 = mysqli_fetch_array($rs1, MYSQLI_NUM);
        $data2 = mysqli_fetch_array($rs2, MYSQLI_NUM);
        if(empty($data1)) {
            $_SESSION['alert'] = 'Login não existe.';
            header("location:../Front-end/login.php");
        } else if(empty($data2)) {
            $_SESSION['alert'] = 'Senha incorreta.';
            header("location:../Front-end/login.php");
        } else{
            $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = MD5('$senha');";
            $r = NULL;
            $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
            while($row = mysqli_fetch_assoc($q)){
                $r = $row;
            }
            if(!is_null($r)){
                $id = $r["id"];
                $sql2 = "SELECT * FROM profile WHERE usuario_id = '$id';";
                $q2 = mysqli_query($connect, $sql2) or die (mysqli_error($connect));
                while($row2 = mysqli_fetch_assoc($q2)){
                    $r2 = $row2;
                }
                $_SESSION["id"] = $r["id"];
                $_SESSION["login"] = $r["login"];
                $_SESSION["email"] = $r["email"];
                $_SESSION["nome"] = $r["nome"];
                $_SESSION["admin"] = $r["admin"];
                if(!empty($r2['arquivo'])){
                $_SESSION["profimg"] = $r2["arquivo"];
                } else {
                    $_SESSION["profimg"] = 'default.jpg';
                }
                header("location:../Front-end/index.php");
            } else {
                $_SESSION['alert'] = 'Login ou senha errado!';
                header("location:../Front-end/login.php");
            }
        }
    } else {
        header("location:../Front-end/index.php");
    }
?>  