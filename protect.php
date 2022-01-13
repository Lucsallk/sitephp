<?php


    function protect(){

        if(isset($_SESSION)){
        session_start();
        }
        if( is_numeric($_SESSION['cadastro'])){
            header("location: login.php");
        }
    }
?>