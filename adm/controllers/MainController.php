<?php
class MainController {
    
    public function index(){
        if(!isset($_SESSION["login"])){
            header("Location: Index.php?c=m&a=l");
        }
        require("views/Header.php");
        require("views/Home.php");
        require("views/Footer.php");
    }

    public function login(){
        require("views/users/Login.php");
    }

    public function sessionDestroy(){
        session_destroy();
        header("Location: Index.php?c=m&a=l");
    }

}
?>