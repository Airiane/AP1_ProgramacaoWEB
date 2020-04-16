<?php
    class connectClass{
        var $conn;
        function openConnect(){
            $servername = 'localhost:3308';
            $username = 'root';
            $password = 'root';
            $dbname = 'ap1';
            $this -> conn = new mysqli($servername, $username, $password, $dbname);
        }
        function getConn(){
            return $this -> conn;
        }
    }
    ?>