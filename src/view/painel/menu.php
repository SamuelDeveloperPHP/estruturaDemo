<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a> -->
                <div class="sb-sidenav-menu-heading">Recorder</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Cadastro
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('companiesController')" >Clientes</a>
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('patchesController')">Patches</a>
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('api_batchController')" >Nº de lote</a>
                    </nav>
                </div>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('api_batch_itemController')" >Item do lote</a>
                        
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('api_log_requestController')" >Log de Requisições</a> 
                        
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('api_log_responseController')" >Log de Resposta</a>
                        
                        <a class="nav-link" href="javascript:void(0)" onclick="eoxbase.fLoadMenu('appliedController')" >Aplicação</a>  
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Logs
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="layout-static.html">API</a>
                        <a class="nav-link" href="layout-static.html">Batch</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logado como:</div>
            <?= $_SESSION['user'] ?>
        </div>
    </nav>
</div>