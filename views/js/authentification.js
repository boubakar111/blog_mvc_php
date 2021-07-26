$(function() {

    $('#submit').click(function(event) {
        event.preventDefault();
        submitForm();


    });
});

function submitForm() {


    var username = $('#username').val();
    var password = $('#password').val();

    if (username == "" ||
        password == "") {
        $('#error').show();
        $('#error').html('<p style="text-align: center;"> remplir les deux champs svp ..!</p>');
    } else {

        var jqxher = $.ajax({
            type: "POST",
            url: 'admin/authentification.php',
            data: {
                username: username,
                password: password,
            }
        }).done(function(response, textStatus, jqxher) {
            if (response == "COMPTEDEVACTIVIE") {
                $('#error').show();
                $('#error').html('<p style="text-align: center;"> votre compte est désactiver !</p>');
            } else if (response == "AUCUNADMINACENOM") {
                $('#error').show();
                $('#error').html('<p style="text-align: center;"> compte admin erroné  !</p>');
            } else if (response == "METHODEERRONIE") {
                $('#error').show();
                $('#error').html('<p style="text-align: center;"> Un probleme est survenu lors de la connection  !</p>');
            } else {

                setTimeout(' window.location.href = "admin/espaceAdmin.php"; ', 1000);
            }
        });
        return false;
    }


}