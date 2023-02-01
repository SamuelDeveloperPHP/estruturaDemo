<?php
include_once('../../lib/config.php');
$lblTitle = 'Clientes';
$lblBreadCrumb = 'Cadastro / Clientes';

$action = $_REQUEST['action'];
$objCompanie = new companiesModel();
$objCompanie->fill($_REQUEST);

switch ($action) {
    case 'new':

        include_once(_DEMO_PATH_VIEW_ . 'companies/createCompanies.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
        break;

    case 'edit':
        $lblBreadCrumb = 'Editar / Clientes';
        $objCompanie->fill($objCompanie->read()[0]);

        include_once(_DEMO_PATH_VIEW_ . 'companies/createCompanies.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
        break;

    case 'create':
        $arrMsg = $objCompanie->validate();

        if (count($arrMsg) == 0) { //salvar
            global $error;
            if ($objCompanie->create()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Cliente inserido com sucesso',
                        'Id: <strong>' . $objCompanie->getId() . '</strong>',
                        'Token: <strong>' . $objCompanie->getToken() . '</strong>'
                    ]
                ];
                include_once(_DEMO_PATH_VIEW_ . 'companies/readCompanies.php');
                include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
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
        include_once(_DEMO_PATH_VIEW_ . 'companies/createCompanies.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');

        break;

    case 'update':
        $arrMsg = $objCompanie->validate();

        if (count($arrMsg) == 0) { //editar
            global $error;
            if ($objCompanie->update()) {
                $arrMsg = [
                    'type' => 'success',
                    'message' => [
                        'Cliente editado com sucesso'
                    ]
                ];
                $objCompanie = new companiesModel();
                $arrCompanies = $objCompanie->read();
                include_once(_DEMO_PATH_VIEW_ . 'companies/readCompanies.php');
                include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
                break;
            } else {
                $arrMsg = [
                    'type' => 'danger',
                    'message' => [
                        'Erro ao editar',
                        'Mensagem: <strong>' . $error->getMessage() . '</strong>'
                    ]
                ];
            }
        }
        include_once(_DEMO_PATH_VIEW_ . 'companies/createCompanies.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');

        break;

    case 'delete':

        $arrMsg = $objCompanie->validate();

        if ($objCompanie->delete()) {
            
            $arrMsg = [
                'type' => 'success',
                'message' => [
                    'Registro excluído com sucesso'
                ]
            ];
            $objCompanie = new companiesModel();
            $arrCompanies = $objCompanie->read();
            include_once(_DEMO_PATH_VIEW_ . 'companies/readCompanies.php');
            include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
            break;
        } else {
            $arrMsg = [
                'type' => 'danger',
                'message' => [
                    'Erro ao excluir',
                    'Mensagem: <strong>' . $error->getMessage() . '</strong>'
                ]
            ];
        }

        include_once(_DEMO_PATH_VIEW_ . 'companies/readCompanies.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');

        break;

    case 'search':
        $objCompanie->setFlagDeleted($_REQUEST['flagDeleted']);
        $arrCompanies = $objCompanie->read();
        include_once(_DEMO_PATH_VIEW_ . 'companies/readCompaniesTable.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
        break;
    default:
        $arrCompanies = $objCompanie->read();
        include_once(_DEMO_PATH_VIEW_ . 'companies/readCompanies.php');
        include_once(_DEMO_PATH_VIEW_ . 'companies/jsCompanies.php');
        break;
}
