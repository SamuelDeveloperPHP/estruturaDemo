<?php
include_once('../../lib/config.php');
$lblTitle = 'Itens de Lote';
$lblBreadCrumb = 'Cadastro / Itens de Lote';

$action = $_REQUEST['action'];
$objApi_batch_item = new api_batch_itemModel();
$objApi_batch_item->fill($_REQUEST);

switch ($action) {
    case 'new':
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/createApi_batch_item.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/jsApi_batch_item.php');
        break;
    case 'create':
        $arrMsg = $objApi_batch_item->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objApi_batch_item->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Registro inserido com sucesso',                      
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/readApi_batch_item.php');
                include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/jsApi_batch_item.php');
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
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/createApi_batch_item.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/jsApi_batch_item.php');

        break;
    case 'search' :
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/readApi_batch_itemTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/jsApi_batch_item.php');
        break;
    default:
        
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/readApi_batch_item.php');
        include_once(_DEMO_PATH_VIEW_ . 'api_batch_item/jsApi_batch_item.php');
        break;
}
