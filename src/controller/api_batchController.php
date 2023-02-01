<?php
include_once('../../lib/config.php');
$lblTitle = 'Nº de Lote';
$lblBreadCrumb = 'Cadastro / Nº de Lote';

$action = $_REQUEST['action'];
$objApi_batch = new api_batchModel();
$objApi_batch->fill($_REQUEST);

switch ($action) {
    case 'new':
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/createApi_batch.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/jsApi_batch.php');
        break;
    case 'create':
        $arrMsg = $objApi_batch->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objApi_batch->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Registro inserido com sucesso'                       
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'api_batch/readApi_batch.php');
                include_once(_DEMO_PATH_VIEW_ . 'api_batch/jsApi_batch.php');
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
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/createApi_batch.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/jsApi_batch.php');

        break;
    case 'search' :
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/readApi_batchTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/jsApi_batch.php');
        break;
    default:
        
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/readApi_batch.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch/jsApi_batch.php');
        break;
}
