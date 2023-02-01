<?php
include_once('../../lib/config.php');
$lblTitle = 'Aplicações';
$lblBreadCrumb = 'Cadastro / Aplicações';

$action = $_REQUEST['action'];
$objApplied = new appliedModel();
$objApplied->fill($_REQUEST);

switch ($action) {
    case 'new':
        include_once(_DEMO_PATH_VIEW_ . 'applied/createApplied.php');
        include_once(_DEMO_PATH_VIEW_ . 'applied/jsApplied.php');
        break;

    case 'create':
        $arrMsg = $objApplied->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objApplied->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Cliente inserido com sucesso'
                        
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'applied/readApplied.php');
                include_once(_DEMO_PATH_VIEW_ . 'applied/jsApplied.php');
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
        include_once(_DEMO_PATH_VIEW_ . 'applied/createApplied.php');
        include_once(_DEMO_PATH_VIEW_ . 'applied/jsApplied.php');

        break;
    case 'search' :
        include_once(_DEMO_PATH_VIEW_ . 'applied/readAppliedTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'applied/jsApplied.php');
        break;
    default:
        
        include_once(_DEMO_PATH_VIEW_ . 'applied/readApplied.php');
        include_once(_DEMO_PATH_VIEW_ . 'applied/jsApplied.php');
        break;
    
    
}
