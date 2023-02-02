<main>
    <div class="container-fluid px-4">
        <?php include_once(_DEMO_PATH_VIEW_ . 'painel/contentTitle.php'); ?>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de <?= $lblTitle ?>
            </div>
            <div class="card-body">
                <form id="readApi_batchsForm" action="" method="post">
                    <?php include_once(_DEMO_PATH_ . 'lib/msg.inc.php'); ?>

                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-primary" onclick="api_batchTableJs.fNew()">Novo</button>
                </form>
                <div id="divApi_batchsList">
                    <?php include_once('readApi_batchTable.php') ?>
                </div>
            </div>
        </div>
    </div>
</main>