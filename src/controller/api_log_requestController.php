<?php
include_once('../../lib/config.php');
$lblTitle = 'Log de Reuisições';
$lblBreadCrumb = 'Cadastro / Log de Reuisições';

$action = $_REQUEST['action'];
$objApi_log_request = new api_log_requestModel();
$objApi_log_request->fill($_REQUEST);

switch ($action) {
    case 'new':
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/createApi_log_request.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/jsApi_log_request.php');
        break;
    case 'create':
        $arrMsg = $objApi_log_request->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objApi_log_request->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Cliente inserido com sucesso',                      
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'api_log_request/readApi_log_request.php');
                include_once(_DEMO_PATH_VIEW_ . 'api_log_request/jsApi_log_request.php');
                break;
            } else {
                $arrMsg = [
                    'type' => 'danger',
                    'message' => [
                        'Erro ao inserir',
                        'Mensagem: <strong>' . $error->getMessage() . '</strong>'
                    ]
                ];
            }
        }
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/createApi_log_request.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/jsApi_log_request.php');

        break;
    case 'search' :
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/readApi_log_requestTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/jsApi_log_request.php');
        break;
    default:
        
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/readApi_log_request.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_request/jsApi_log_request.php');
        break;
}
