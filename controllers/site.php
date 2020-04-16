<?php
    class siteControler{

        public function home(){
            require_once("viws/site/Header.php");
            require_once("viws/site/Home.php");
            require_once("viws/site/Footer.php");
        }
        public function sobre(){
            require_once("viws/site/Header.php");
            require_once("viws/site/Sobre.php");
            require_once("viws/site/Footer.php");
        }
        public function contatos(){
            require_once("viws/site/Header.php");
            require_once("viws/site/Contatos.php");
            require_once("viws/site/Footer.php");
        }
    }
?>