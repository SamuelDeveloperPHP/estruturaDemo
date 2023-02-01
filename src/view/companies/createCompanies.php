<main>
    <div class="container-fluid px-4">
        <?php include_once(_DEMO_PATH_VIEW_ . 'painel/contentTitle.php'); ?>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <?= $objCompanie->getId()? 'Alteração' : 'Cadastro' ?> de <?= $lblTitle ?>
            </div>
            <div class="card-body">
                <form id="createCompaniesForm" action="" method="post">
                    <?php include_once(_DEMO_PATH_ . 'lib/msg.inc.php'); ?>
                    <input type="hidden" name="action" id="action" value="<?= $objCompanie->getId() ? 'update' : 'create' ?>">
                    <input type="hidden" name="id" id="id" value="<?= $objCompanie->getId() ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label"><strong>Cliente</strong></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $objCompanie->getName() ?>" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Label</strong></label>
                            <input type="text" class="form-control" id="label" name="label" value="<?= $objCompanie->getLabel() ?>" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Debug</strong></label>
                            <select type="text" class="form-select" id="debug" name="debug">
                                <option value="">Selecione</option>
                                <option value="true" <?= $objCompanie->getDebug() == 'true' ? 'selected' : '' ?> >True</option>
                                <option value="false" <?= $objCompanie->getDebug() == 'false' ? 'selected' : '' ?> >False</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>abcMethod</strong></label>
                            <select type="text" class="form-select" id="abcMethod" name="abcMethod">
                                <option value="">Selecione</option>
                                <option value="invoices" <?= $objCompanie->getAbcMethod() == 'invoices' ? 'selected' : '' ?> >Invoices</option>
                                <option value="orders" <?= $objCompanie->getAbcMethod() == 'orders' ? 'selected' : '' ?> >Orders</option>
                                <option value="2" <?= $objCompanie->getAbcMethod() == '2' ? 'selected' : '' ?> >2</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>isCobranca</strong></label>
                            <select type="text" class="form-select" id="isCobranca" name="isCobranca">
                                <option value="">Selecione</option>
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>App</strong></label>
                            <select type="text" class="form-select" id="app" name="app">
                                <option value="">Selecione</option>
                                <option value="true" <?= $objCompanie->getApp() == 'true' ? 'selected' : '' ?> >True</option>
                                <option value="false" <?= $objCompanie->getApp() == 'false' ? 'selected' : '' ?> >False</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Api</strong></label>
                            <select type="text" class="form-select" id="api" name="api">
                                <option value="">Selecione</option>
                                <option <?= $objCompanie->getApi() == '1' ? 'selected' : '' ?> value="1">1</option>
                                <option <?= $objCompanie->getApi() == '2' ? 'selected' : '' ?> value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="companiesJs.fBack()">Voltar</button>
                        <button type="reset" class="btn btn-secondary">Limpar</button>
                        <button type="button" class="btn btn-primary" onclick="companiesJs.fSave()">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>