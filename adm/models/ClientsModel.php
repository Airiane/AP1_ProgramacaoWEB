<?php
    class ClientsModel{
        var $result;
        var $conn;

        public function __construct(){
            require_once("bd/ConnectClass.php");
            $Oconn = new ConnectClass();
            $Oconn -> openConnect();
            $this -> conn = $Oconn -> getConn();
        }
        
        public function listClients(){
            $sql = 'SELECT * FROM clientes';
            $this -> result = $this -> conn -> query($sql);
        }

        public function consultClient($idClient){
            $sql = "SELECT * FROM clientes WHERE idClient = ".$idClient.";";
            $this -> result = $this -> conn ->query($sql);
        }

        public function insertClient($arrayClientes){
            $sql = "INSERT INTO clientes (nome, email, mensagem) VALUES ('".$arrayClientes['nome']."', 
            '".$arrayClientes['email']."', '".$arrayClientes['mensagem']."');";

            $this -> conn -> query($sql);
        }

        public function updateClient($arrayClientes){
            $sql = "UPDATE clientes set nome='".$arrayClientes['nome']."', 
            email='".$arrayClientes['email']."', mensagem='".$arrayClientes['mensagem']."'
            where idClient=".$arrayClientes['idClient'].";";
            $this -> result = $this -> conn -> query($sql);
        }

        public function deleteClient($idClient){
            $sql="DELETE FROM clientes WHERE idClient=".$idClient.";";
            $this -> result = $this -> conn -> query($sql);
        }

        public function getConsult(){
            return $this -> result;
        }
    }
?>