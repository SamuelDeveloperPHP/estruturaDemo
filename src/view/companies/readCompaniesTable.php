<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Label</th>
                <th>Token</th>
                <th>Debug</th>
                <th>AbcMethod</th>
                <th>isCobranca</th>
                <th>App</th>
                <th>Api</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrCompanies as $obj) : ?>
                <tr class="<?= $obj['deleted'] ? 'bg-light' : '' ?>">
                    <td><?php echo $obj['id'] ?></td>
                    <td><?php echo $obj['name'] ?></td>
                    <td><?php echo $obj['label'] ?></td>
                    <td style="max-width:150px"><?php echo $obj['token'] ?></td>
                    <td><?php echo $obj['debug'] ?></td>
                    <td><?php echo $obj['abcMethod'] ?></td>
                    <td><?php echo $obj['isCobranca'] ?></td>
                    <td><?php echo $obj['app'] ?></td>
                    <td><?php echo $obj['api'] ?></td>

                    <td class="text-center">
                        <button type="button" class="btn btn-outline-success" onclick="objaniesJs.fWiev('<?php echo $obj['id'] ?>')">
                            View<i class="bi bi-x-circle-fill"></i>
                        </button>

                        <button type="button" class="btn btn-outline-primary" onclick="objaniesJs.fEdit('<?php echo $obj['id'] ?>','<?php echo $obj['name'] ?>','<?php echo $obj['label'] ?>','<?php echo $obj['token'] ?>','<?php echo $obj['debug'] ?>','<?php echo $obj['abcMethod'] ?>','<?php echo $obj['isCobranca'] ?>','<?php echo $obj['app'] ?>','<?php echo $obj['api'] ?>')">
                            Editar
                        </button>
                        <button type="button" class="btn btn-outline-danger" onclick="objaniesJs.fDelete(<?php echo $obj['id'] ?>)">
                            Excluir
                        </button>

                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<script src="../../../js/dataTable.js"></script>
<script src="../../../js/datatables-simple-demo.js"></script>