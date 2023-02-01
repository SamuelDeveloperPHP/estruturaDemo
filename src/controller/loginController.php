<?php
$ignoreSession = true;
include_once('../../lib/config.php');

$action = $_REQUEST['action'];
switch ($action) {
    case 'logout':
        session_destroy();
        header('Location: /src/controller/loginController.php');
    case 'login':
        $objLogin = new loginModel();
        $objLogin->setUser($_REQUEST['user']);
        $objLogin->setPassword($_REQUEST['password']);

        if ($objLogin->validate()) {
            $_SESSION['user'] = $objLogin->getUser();
            header('Location: /src/view/painel/');
            include_once(_DEMO_PATH_VIEW_ . 'painel/index.php');
        } else {
            include_once(_DEMO_PATH_VIEW_ . 'login/loginForm.php');
        }

        break;
    default:
        include_once(_DEMO_PATH_VIEW_ . 'login/loginForm.php');
        break;
}
