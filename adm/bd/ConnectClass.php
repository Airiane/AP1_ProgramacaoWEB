<?php
    class ConnectClass{
        var $conn;
        public function openConnect(){
            $servername = 'localhost:3308';
            $username = 'root';
            $password = 'root';
            $dbname = 'ap1';
            $this -> conn = new mysqli($servername, $username, $password, $dbname);
        }

        
        public function getConn(){
            return $this -> conn;
        }
    }
?>