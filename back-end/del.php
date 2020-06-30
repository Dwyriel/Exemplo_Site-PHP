<?php 
include "../config.php";
if (isset($_GET['idmsg']) && $_SESSION['admin'] == 0){
    $id = $_GET['idmsg'];
    $sql = "DELETE FROM mensagem WHERE id = '$id';";
    $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));
    if(mysqli_affected_rows($connect) > 0) {
        header("location:../Front-end/Adminmsg.php");
    }
} elseif (isset($_GET['idart']) && $_SESSION['admin'] == 0){
    $id = $_GET['idart'];
    $check3 = "SELECT * FROM galeria WHERE conteudo_id = '$id';";
    $rs3 = mysqli_query($connect,$check3);
    $data3 = mysqli_fetch_array($rs3, MYSQLI_ASSOC);
    if(count($data3) > 0) {
        $delarq = $data3["arquivo"];
        $delimg = "../uploads/" . $delarq;
        unlink(realpath($delimg));
        $sql = "DELETE FROM galeria WHERE conteudo_id = '$id';";
        $q = mysqli_query($connect, $sql);
    }
    $sql = "DELETE FROM conteudo WHERE id = '$id';";
    if(mysqli_query($connect, $sql)){
        header("location:../Front-end/AdminArt.php");
    } else {
        die (mysqli_error($connect));
    }
} elseif(isset($_GET['idacc']) && $_SESSION['admin'] == 0){
    $id = $_GET['idacc'];
    $check3 = "SELECT * FROM profile WHERE usuario_id = '$id';";
    $rs3 = mysqli_query($connect,$check3);
    $data3 = mysqli_fetch_array($rs3, MYSQLI_ASSOC);
    if(count($data3) > 0) {
        $delarq = $data3["arquivo"];
        $delimg = "../userimg/" . $delarq;
        unlink(realpath($delimg));
        $sql = "DELETE FROM profile WHERE usuario_id = '$id';";
        $q = mysqli_query($connect, $sql);
    }
    $sql = "DELETE FROM usuario WHERE id = '$id';";
    if(mysqli_query($connect, $sql)){
        header("location:../Front-end/AdminAcc.php");
    } else {
        die (mysqli_error($connect));
    }
} else {
    header("location:../Front-end/index.php");
}
?>