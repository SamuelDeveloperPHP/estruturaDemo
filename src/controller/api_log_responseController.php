<?php
include_once('../../lib/config.php');
$lblTitle = 'Log de respostaas';
$lblBreadCrumb = 'Cadastro / Log de respostas';

$action = $_REQUEST['action'];
$objApi_log_response = new api_log_responseModel();
$objApi_log_response->fill($_REQUEST);

switch ($action) {
    case 'new':
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/createApi_log_response.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/jsApi_log_response.php');
        break;
    case 'create':
        $arrMsg = $objApi_log_response->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objApi_log_response->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Cliente inserido com sucesso',                     
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'api_log_response/readApi_log_response.php');
                include_once(_DEMO_PATH_VIEW_ . 'api_log_response/jsApi_log_response.php');
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
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/createApi_log_response.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/jsApi_log_response.php');

        break;
    case 'search' :
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/readApi_log_responseTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/jsApi_log_response.php');
        break;
    default:
        
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/readApi_log_response.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_log_response/jsApi_log_response.php');
        break;
}
