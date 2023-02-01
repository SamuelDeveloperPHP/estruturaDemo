<script>
    var api_batchJs = ({
        fConfig: function() {
            //$('api_batchList').dataTable({});
        },
        fNew: function() {
            $.ajax({
                'url': '../../controller/api_batchController.php',
                data: {
                    'action': 'new'
                }
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fBack: function() {
            $.ajax({
                'url': '../../controller/api_batchController.php',
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
                'url': '../../controller/api_batchController.php',
                data: $('#createApi_batchForm').serialize()
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fSearch: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/api_batchController.php',
                data: $('#readApi_batchForm').serialize()
            }).done(function(data) {
                $('#divApi_batchList').html(data);
            });
        },
    });
    $(document).ready(function() {
        api_batchJs.fConfig();
    })
</script>