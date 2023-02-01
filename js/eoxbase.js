$(document).ready(function () {

});

var eoxbase = ({
    /* Função para carregar os menus */
    fLoadMenu: function (file) {
        $.ajax({
            'url': './../../controller/' + file + '.php'
        }).done(function (data) {
            $('#layoutSidenav_content').html(data);
        })
    }
})