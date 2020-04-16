<?php
session_start();

if(!isset($_GET['c'])){
    require_once("controllers/MainController.php");
    $Main = new MainController();
    $Main -> index();
}else{
    switch($_REQUEST['c']){
        case 'm':
            require_once("controllers/MainController.php");
            $Main = new MainController();

            if(!isset($_GET['a'])){
                $Main -> index();
            }else{
                switch($_REQUEST['a']){
                    case 'i': 
                        $Main -> index();
                    break;
                    case 'l':
                        $Main -> login();
                    break;
                    case 'sd':
                        $Main -> sessionDestroy();
                    break;
                }
            }
        break;

        case 'u':
            require_once("controllers/UserController.php");
            $User = new UsersController();

            if(!isset($_GET['a'])){
                $User -> index();
            }else{
                switch($_REQUEST['a']){
                    case 'vl':
                        $User -> validateLogin();
                    break;
                }
            }
        break;

        case 'c':
			require_once('controllers/ClientsController.php');
			$client = new clientsController();

			if(!isset($_GET['a'])){
				$client -> Index(); 
			}else{
				switch($_REQUEST['a']){
					case 'lc': 
						$client -> listClients();
                    break; 
                    case 'ic':
                        $client -> insertClient();
                    break;
                    case 'ica':
                        $client -> insertClientAction();
                    break;
                    case 'uc': $id=$_GET['id']; $client -> updateClient($id);break;
                    case 'uca':
                        $client -> updateClientAction();
                    break;
                    case 'dc':$id=$_GET['id'];$client -> deleteClient($id);break;
				}
			}
        break;

    }
}
?>