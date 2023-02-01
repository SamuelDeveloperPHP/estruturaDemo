<?php
include_once('../../../lib/config.php');
?>
<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= _DEMO_TITLE_ ?></title>
    <?php include_once('css.php'); ?>
</head>

<body class="sb-nav-fixed">
    <?php include_once('nav.php'); ?>
    <div id="layoutSidenav">
        <?php include_once('menu.php'); ?>
        <div id="layoutSidenav_content">
            <?php include_once('content.php'); ?>
            <footer class="py-4 bg-light mt-auto">
                <?php include_once('footer.php'); ?>
            </footer>
        </div>
    </div>
    <?php include_once('js.php'); ?>
</body>

</html>