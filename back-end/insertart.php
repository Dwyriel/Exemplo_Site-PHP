<?php 
    include "../config.php";
    if(isset($_POST["submitbtn"]) == true) {
        $texto = $_POST["content"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $bit = 1;
        $datapub = date('Y/m/d H:i:s');
        $texto = rescape($connect, $texto);
        $titulo = rescape($connect, $titulo);
        $descricao = rescape($connect, $descricao);
        $sql = "INSERT INTO conteudo(texto,titulo, descricao, ativo, data_publi) VALUE ('$texto', '$titulo','$descricao', '$bit', '$datapub');";
        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
        if(mysqli_affected_rows($connect) > 0) {
            $id = mysqli_insert_id($connect);
            if(!empty($_FILES['img']['name'])){
                $arqtype = $_FILES['img']['type'];
                $arqtype = rescape($connect, $arqtype);
                $dir = '../uploads/';
                $upfile = $dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $upfile)) {
                    $pathinfo = pathinfo($upfile);
                    $newname = "../uploads/imagem".$id.".".$pathinfo['extension'];
                    $arq = "imagem".$id.".".$pathinfo['extension'];
                    rename($upfile, $newname);
                    $sql = "INSERT INTO galeria(arquivo, tipo, conteudo_id) VALUE ('$arq', '$arqtype', '$id');";
                    $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    if(mysqli_affected_rows($connect) > 0) {
                        echo "<script> Alert('Artigo enviado');</script>";
                        header("location:../Front-end/Art.php?art=$titulo");
                    }
                } else {
                    echo "<script> Alert('Algum erro ocorreu, artigo não enviado!');</script>";
                    header("location:../Front-end/NewArt.php");
                }
            } else {
                echo "<script> Alert('Artigo enviado');</script>";
                header("location:../Front-end/Art.php?art=$titulo");
            }
        }
        mysqli_close($connect);
    } elseif(isset($_POST["submit2btn"]) && $_SESSION['admin'] == 0){
        $titulo = $_POST["titulo"];
        $id = $_POST["id"];
        $texto = $_POST["content"];
        $descricao = $_POST["descricao"];
        $bit = $_POST["ativo"];
        $texto = rescape($connect, $texto);
        $titulo = rescape($connect, $titulo);
        $descricao = rescape($connect, $descricao);
        $bit = rescape($connect, $bit);
        $sql = "UPDATE conteudo SET titulo = '$titulo', descricao = '$descricao', texto = '$texto', ativo = '$bit' WHERE id = '$id';";
        if($q = mysqli_query($connect, $sql)){
            if(!empty($_FILES['img']['name'])){
                $arqtype = $_FILES['img']['type'];
                $arqtype = rescape($connect, $arqtype);
                $dir = '../uploads/';
                $upfile = $dir . basename($_FILES['img']['name']);
                $check3 = "SELECT * FROM galeria WHERE conteudo_id = '$id';";
                $rs3 = mysqli_query($connect,$check3);
                $data3 = mysqli_fetch_array($rs3, MYSQLI_ASSOC);
                if(count($data3) > 0) {
                    $oldimg = $data3["arquivo"];
                    $oldimgname = $dir . $oldimg;
                    unlink(realpath($oldimgname));
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $upfile)) {
                        $pathinfo = pathinfo($upfile);
                        $newname = "../uploads/imagem".$id.".".$pathinfo['extension'];
                        $arq = "imagem".$id.".".$pathinfo['extension'];
                        rename($upfile, $newname);
                        $sql = "UPDATE galeria SET arquivo = '$arq', tipo = '$arqtype' WHERE conteudo_id = '$id';";
                        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    } else {
                        echo "<script> Alert('Algum erro ocorreu, imagem não enviada!');</script>";
                        header("location:../Front-end/AdminEditArt.php?art=$titulo");
                    }
                } else {
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $upfile)) {
                        $pathinfo = pathinfo($upfile);
                        $newname = "../uploads/imagem".$id.".".$pathinfo['extension'];
                        $arq = "imagem".$id.".".$pathinfo['extension'];
                        rename($upfile, $newname);
                        $sql = "INSERT INTO galeria(arquivo, tipo, conteudo_id) VALUE ('$arq', '$arqtype', '$id');";
                        $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    } else {
                        echo "<script> Alert('Algum erro ocorreu, imagem não enviada!');</script>";
                        header("location:../Front-end/AdminEditArt.php?art=$titulo");
                    }
                }
            }
            if ($bit == 1){
                echo "<script> Alert('Artigo enviado');</script>";
                header("location:../Front-end/Art.php?art=$titulo");
            } else {
                header("location:../Front-end/AdminArt.php");
            }
        } else {
            die (mysqli_error($connect));
            header("location:../Front-end/admin.php");
        }
} else {
    header("location:../Front-end/index.php");
}
?>