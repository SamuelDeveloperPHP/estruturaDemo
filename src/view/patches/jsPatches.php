<script>
    var patchesJs = ({
        fConfig: function() {
            //$('patchesList').dataTable({});
        },
        fNew: function() {
            $.ajax({
                'url': '../../controller/patchesController.php',
                data: {
                    'action': 'new'
                }
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fBack: function() {
            $.ajax({
                'url': '../../controller/patchesController.php',
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fEdit: function() {
            console.log('editar');
        },
        fDelete: function() {
            console.log('novo');
        },
        fSave: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/patchesController.php',
                data: $('#createPatchesForm').serialize()
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fSearch: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/patchesController.php',
                data: $('#readPatchesForm').serialize()
            }).done(function(data) {
                $('#divPatchesList').html(data);
            });
        },
    });
    $(document).ready(function() {
        patchesJs.fConfig();
    })
</script>