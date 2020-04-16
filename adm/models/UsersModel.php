<?php
    class UsersModel{
        var $result;

        function _construct(){
            require_once("bd/ConnectClass.php");
        }
        public function consultUser($login){
            require("bd/ConnectClass.php");
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $sql = "SELECT * FROM users WHERE login='".$login."'";
            $conn = $Oconn -> getConn();
            $this -> result = $conn-> query($sql);
        }

        public function getConsult(){
            return $this -> result;
        }
    }
?>