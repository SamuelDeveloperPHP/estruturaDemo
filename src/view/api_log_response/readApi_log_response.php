<main>
    <div class="container-fluid px-4">
        <?php include_once(_DEMO_PATH_VIEW_ . 'painel/contentTitle.php'); ?>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de <?= $lblTitle ?>
            </div>
            <div class="card-body">
                <form id="readApi_log_responseForm" action="" method="post">
                    <?php include_once(_DEMO_PATH_ . 'lib/msg.inc.php'); ?>
                    <input type="hidden" name="action" id="action" value="search">
                   
                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-primary" onclick="api_log_responseJs.fNew()">Novo</button>
                </form>
                <div id="divApi_log_responseList">
                    <?php include_once('readApi_log_responseTable.php') ?>
                </div>
            </div>
        </div>


    </div>
</main>