<?php
    class clientsController{
        var $ClientModel;

        public function __construct(){
            if(!isset($_SESSION["login"])){
                header("Location: index.php?c=m&a=l");
            }

            require_once("models/ClientsModel.php");
            $this -> ClientModel = new ClientsModel();
        }
        public function index(){
            $this -> listClients();
        }

        public function listClients(){
            $this -> ClientModel -> listClients();
            $result = $this -> ClientModel -> getConsult();

            $arrayClientes = array();
            while($line = $result->fetch_assoc())
            {
                array_push($arrayClientes, $line);
            }

            require_once ("views/Header.php");
            require_once ("views/client/listClients.php");
            require_once ("views/Footer.php");
        }
        public function insertClient(){
            require_once ("views/Header.php");
            require_once ("views/client/insertClient.php");
            require_once ("views/Footer.php");
        }
        public function insertClientAction(){
            $arrayClientes["nome"] = $_POST["nome"];
            $arrayClientes["email"] = $_POST["email"];
            $arrayClientes["mensagem"] = $_POST["mensagem"];

            $this -> ClientModel -> insertClient($arrayClientes);

            $this -> listClients();
        }

        public function updateClient($idClient){
            $this -> ClientModel-> consultClient($idClient);
            $result = $this -> ClientModel -> getConsult();

            if($arrayClientes = $result->fetch_assoc()){
                require_once ("views/Header.php");
                require_once ("views/client/alterClient.php");
                require_once ("views/Footer.php");
            }
        }

        public function updateClientAction(){

            $arrayClientes["idClient"] = $_POST["idClient"];
            $arrayClientes["nome"] = $_POST["nome"];
            $arrayClientes["email"] = $_POST["email"];
            $arrayClientes["mensagem"] = $_POST["mensagem"];

            $this -> ClientModel -> updateClient($arrayClientes);

            $this -> listClients();
        }

        public function deleteClient($idClient){
            $this -> ClientModel -> deleteClient($idClient);

            $this -> listClients();
        }
    }
?>