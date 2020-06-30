<?php 
        include "..config.php";
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $cookieparam = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $cookieparam["path"], $cookieparam["domain"],
                $cookieparam["secure"], $cookieparam["httponly"]
            );
        }
        if(session_destroy()){
            echo "<script>alert('Sessão encerrada.');</script>";
        }
        header("location:../Front-end/index.php");
        //header("location:../Front-end/index.php");
?>