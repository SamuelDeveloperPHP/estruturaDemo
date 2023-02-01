<?php

function checkSession()
{
    if (!isset($_SESSION['user'])) {
        header('Location: /src/controller/loginController.php');
    }
}

function print_pre($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
