<?php
@session_start();

include_once('function.php');
if (!$ignoreSession) checkSession();

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    ini_set('display_errors', 'on');
    version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
}

/*error_reporting(1);
ini_set('display_errors', 1);*/

//config bd
define('_DEMO_DB_SERVER_', 'demo.com.br');
define('_DEMO_DB_NAME_', 'recorder');
define('_DEMO_DB_PORT_', 3306);
define('_DEMO_DB_USER_', 'root');
define('_DEMO_DB_PASSWORD_', 'demo');

//config rota
define('_DEMO_TITLE_', 'Estrutura - DEMO ' . date('Y'));
define('_DEMO_PATH_', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
define('_DEMO_PATH_MODEL_', $_SERVER['DOCUMENT_ROOT'] . '/src/model/');
define('_DEMO_PATH_CONTROLLER_', $_SERVER['DOCUMENT_ROOT'] . '/src/controller/');
define('_DEMO_PATH_VIEW_', $_SERVER['DOCUMENT_ROOT'] . '/src/view/');
define('_DEMO_PATH_HTML_', $_SERVER['HTTPS'] ? 'https://' : 'http://' . $_SERVER['HTTP_HOST']);

//include model
include_once(_DEMO_PATH_MODEL_ . '/databaseModel.php');
include_once(_DEMO_PATH_MODEL_ . '/loginModel.php');
include_once(_DEMO_PATH_MODEL_ . '/companiesModel.php');
include_once(_DEMO_PATH_MODEL_ . '/appliedModel.php');
include_once(_DEMO_PATH_MODEL_ . '/patchesModel.php');
include_once(_DEMO_PATH_MODEL_ . '/api_batchModel.php');
include_once(_DEMO_PATH_MODEL_ . '/api_batch_itemModel.php');
include_once(_DEMO_PATH_MODEL_ . '/api_log_requestModel.php');
include_once(_DEMO_PATH_MODEL_ . '/api_log_responseModel.php');

include_once(_DEMO_PATH_MODEL_ . '/usersModel.php');

