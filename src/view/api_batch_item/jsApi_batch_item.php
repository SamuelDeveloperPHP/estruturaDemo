<script>
    var api_batch_itemJs = ({
        fConfig: function() {
            //$('api_batch_itemList').dataTable({});
        },
        fNew: function() {
            $.ajax({
                'url': '../../controller/api_batch_itemController.php',
                data: {
                    'action': 'new'
                }
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fBack: function() {
            $.ajax({
                'url': '../../controller/api_batch_itemController.php',
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
                'url': '../../controller/api_batch_itemController.php',
                data: $('#createApi_batch_itemForm').serialize()
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fSearch: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/api_batch_itemController.php',
                data: $('#readApi_batch_itemForm').serialize()
            }).done(function(data) {
                $('#divApi_batch_itemList').html(data);
            });
        },
    });
    $(document).ready(function() {
        api_batch_itemJs.fConfig();
    })
</script>