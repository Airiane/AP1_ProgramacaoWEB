<?php
session_start();
if(!isset($_GET['c'])){
	require_once("controllers/site.php");
	$site= new siteControler();
	$site->home();
}else{
	switch($_REQUEST['c']){
		case 's':
			require_once('controllers/site.php');
			$site = new siteControler();

			if(!isset($_GET['a'])){
				$site -> home();
			}else{
				switch($_REQUEST['a']){
					case 'h': 
						$site -> home(); 
					break;
					case 's': 
						$site -> sobre(); 
					break;
					case 'c': 
						$site -> contatos(); 
					break;
				}
			}
		break;
		case 'c':
			require_once('controllers/clientes.php');
			$cliente = new clienteControler();

			if(!isset($_GET['a'])){
				$cliente -> Index(); 
			}else{
				switch($_REQUEST['a']){
					case 'cc': 
						$cliente -> formCadastro();
					break;
					case 'lc': 
						$cliente -> listaClientes();
					break; 
				}
			}
		break;
		}
	}
?>