<script>
    var appliedJs = ({
        fConfig: function() {
            //$('appliedList').dataTable({});
        },
        fNew: function() {
            $.ajax({
                'url': '../../controller/appliedController.php',
                data: {
                    'action': 'new'
                }
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fBack: function() {
            $.ajax({
                'url': '../../controller/appliedController.php',
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
                'url': '../../controller/appliedController.php',
                data: $('#createAppliedForm').serialize()
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fSearch: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/appliedController.php',
                data: $('#readAppliedForm').serialize()
            }).done(function(data) {
                $('#divAppliedList').html(data);
            });
        },
    });
    $(document).ready(function() {
        appliedJs.fConfig();
    })
</script>