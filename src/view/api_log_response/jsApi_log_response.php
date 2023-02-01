<script>
    var api_log_responseJs = ({
        fConfig: function() {
            //$('api_log_responseList').dataTable({});
        },
        fNew: function() {
            $.ajax({
                'url': '../../controller/api_log_responseController.php',
                data: {
                    'action': 'new'
                }
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fBack: function() {
            $.ajax({
                'url': '../../controller/api_log_responseController.php',
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
                'url': '../../controller/api_log_responseController.php',
                data: $('#createApi_log_responseForm').serialize()
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fSearch: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/api_log_responseController.php',
                data: $('#readApi_log_responseForm').serialize()
            }).done(function(data) {
                $('#divApi_log_responseList').html(data);
            });
        },
    });
    $(document).ready(function() {
        api_log_responseJs.fConfig();
    })
</script>