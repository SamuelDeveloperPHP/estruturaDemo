<script>
    var companiesJs = ({
        fConfig: function() {
            //$('companiesList').dataTable({});
        },
        fNew: function() {
            $.ajax({
                'url': '../../controller/companiesController.php',
                data: {
                    'action': 'new'
                }
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fBack: function() {
            $.ajax({
                'url': '../../controller/companiesController.php',
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
                'url': '../../controller/companiesController.php',
                data: $('#createCompaniesForm').serialize()
            }).done(function(data) {
                $('#layoutSidenav_content').html(data);
            });
        },
        fSearch: function() {
            $.ajax({
                'method' : 'post',
                'url': '../../controller/companiesController.php',
                data: $('#readCompaniesForm').serialize()
            }).done(function(data) {
                $('#divCompaniesList').html(data);
            });
        },
    });
    $(document).ready(function() {
        companiesJs.fConfig();
    })
</script>