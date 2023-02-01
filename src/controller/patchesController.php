<?php
include_once('../../lib/config.php');
$lblTitle = 'Ajustes';
$lblBreadCrumb = 'Cadastro / Ajustes';

$action = $_REQUEST['action'];
$objPatches = new patchesModel();
$objPatches->fill($_REQUEST);

switch ($action) {
    case 'new':
        include_once(_DEMO_PATH_VIEW_ . 'patches/createPatches.php');
        include_once(_DEMO_PATH_VIEW_ . 'patches/jsPatches.php');
        break;
    case 'create':
        $arrMsg = $objPatches->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objPatches->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Ajuste inserido com sucesso',
                        'Id: <strong>' . $objPatches->getId() . '</strong>',
                        'Token: <strong>' . $objPatches->gatname() . '</strong>'
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'patches/readPatches.php');
                include_once(_DEMO_PATH_VIEW_ . 'patches/jsPatches.php');
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
        include_once(_DEMO_PATH_VIEW_ . 'patches/createPatches.php');
        include_once(_DEMO_PATH_VIEW_ . 'patches/jsPatches.php');

        break;
    case 'search' :
        include_once(_DEMO_PATH_VIEW_ . 'patches/readPatchesTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'patches/jsPatches.php');
        break;
    default:
        
        include_once(_DEMO_PATH_VIEW_ . 'patches/readPatches.php');
        include_once(_DEMO_PATH_VIEW_ . 'patches/jsPatches.php');
        break;
}
