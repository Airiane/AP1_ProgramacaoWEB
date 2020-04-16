<?php
    class clienteControler{

        function formCadastro(){
            require_once("viws/site/Header.php");
            require_once("viws/site/Contatos.php");
            require_once("viws/site/Footer.php");
        }

        function listaClientes(){
            require_once("models/clientesModel.php");
            $cliente = new clientesModel();
            $cliente -> listaClientes();
            $resultado = $cliente -> getConsulta();


            $arrayClientes = array();

            while($linha = $resultado -> fetch_assoc())
            {
                array_push($arrayClientes, $linha);
            }

            require_once ("viws/site/Header.php");
            require_once ("viws/clientes/listaClientes.php");
            require_once ("viws/site/Footer.php");
        }
    }
?>