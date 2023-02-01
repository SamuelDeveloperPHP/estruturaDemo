<main>
    <div class="container-fluid px-4">
        <?php include_once(_DEMO_PATH_VIEW_ . 'painel/contentTitle.php'); ?>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de <?= $lblTitle ?>
            </div>
            <div class="card-body">
                <form id="readAppliedForm" action="" method="post">
                    <?php include_once(_DEMO_PATH_ . 'lib/msg.inc.php'); ?>
                    <input type="hidden" name="action" id="action" value="search">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Example label</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="appliedJs.fSearch()" >Pesquisar</button>
                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-primary" onclick="appliedJs.fNew()">Novo</button>
                </form>
                <div id="divAppliedList">
                    <?php include_once('readAppliedTable.php') ?>
                </div>
            </div>
        </div>


    </div>
</main>