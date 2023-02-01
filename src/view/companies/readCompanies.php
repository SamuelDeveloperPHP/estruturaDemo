<main>
    <div class="container-fluid px-4">
        <?php include_once(_DEMO_PATH_VIEW_ . 'painel/contentTitle.php'); ?>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de <?= $lblTitle ?>
            </div>
            <div class="card-body">
                <form id="readCompaniesForm" action="" method="post">
                    <?php include_once(_DEMO_PATH_ . 'lib/msg.inc.php'); ?>
                    <input type="hidden" name="action" id="action" value="search">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" name="flagDeleted" id="flagDeleted" value="true">
                                Mostrar deletados</label>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary" onclick="companiesJs.fSearch()">Pesquisar</button>
                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-primary" onclick="companiesJs.fNew()">Novo</button>
                </form>
                <div id="divCompaniesList">
                    <?php include_once('readCompaniesTable.php') ?>
                </div>
            </div>
        </div>


    </div>
</main>