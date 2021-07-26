$(document).ready(function() {
    $('#form_contact').on('submit', function(e) {
        e.preventDefault();
        email_Contat()
    });
});

function email_Contat() {
    var firstname = $('#form_nom').val(),
        lastname = $('#form_prenom').val(),
        phone = $('#form_telephone').val(),
        email = $('#form_email').val(),
        subject = $('#form_subject').val(),
        message = $('#form_commentaire').val(),
        $envoyer = $('#email_submit'),
        erreur = $('#erreur'),
        $champ = $('.form-control');

    $champ.keyup(function() {
        if ($(firstname).val().length < 5) {
            $(firstname).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(firstname).css({
                borderColor: 'green',
                color: 'green'
            });
        };

        if ($(lastname).val().length < 5) {
            $($lastname).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(lastname).css({
                borderColor: 'green',
                color: 'green'
            });
        }

        if (!Portable_Valide($('#form_telephone').val())) {
            $(phone).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(phone).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if (!isValidEmailAddress($('#form_email').val())) {
            $(email).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(email).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if ($(subject).val().length < 10) {
            $(subject).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(subject).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if ($(message).val().length > 250) {
            $(message).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(message).css({
                borderColor: 'green',
                color: 'green'
            });
        }
    });
    //verification email 
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
        return pattern.test(email);
    }

    // verification numero de telephone
    function Portable_Valide(PortableTest) {

        var regex = new RegExp(/^0[0-9]{9}$/);

        if (regex.test(PortableTest)) {
            return (true);
        } else {
            return (false);
        }
    }
    //verification  des champs du formulaire 
    function verifier(champ) {
        if (champ == "") { // si le champ est vide
            $erreur.css('display', 'block'); // on affiche le message d'erreur
            $champ.css({ // on rend le champ rouge
                borderColor: 'red',
                color: 'red'
            });
        } else {
            return (true);
        }
    }
    //appel ajax pour enregistre les données du formlaire  dans la base de données 

    verifier(firstname);
    verifier(lastname);
    verifier(phone);
    verifier(email);
    verifier(subject);
    verifier(message);
    var $this = $(this);
    if (verifier(firstname) && verifier(lastname) && Portable_Valide($('#form_telephone').val()) && verifier(email) && verifier(subject) && verifier(message)) {
        $.ajax({
            url: 'models/form_contact.php', // On récupère l'action (ici action.php)
            type: 'POST', // On récupère la méthode (post)
            dataType: 'json', // JSON
            data: {
                nom: firstname,
                prenom: lastname,
                email: email,
                telephone: phone,
                subject: subject,
                commentaire: message
            }, // On sérialise les données = Envoi des valeurs du formulaire

            success: function(dataResult) {

                // var dataResult = JSON.parse(dataResult);

                if (dataResult.statusCode == 200) {
                    $('#form_contact').find('input:text').val('');
                    $('#form_contact').find('#form_commentaire').val('');
                    $("#success").show();
                    $('#success').html("<p>Votre demande à ete envoyer avec succes  </p>");
                } else if (dataResult.statusCode == 1) {
                    $("#myFieldError1").show();
                    $('#myFieldError1').html("<p>Renseigner votre Nom</p>");

                } else if (dataResult.statusCode == 2) {
                    $("#myFieldError2").show();
                    $('#myFieldError2').html("<p>Renseigner votre Prenom</p>");

                } else if (dataResult.statusCode == 3) {
                    $("#myFieldError3").show();
                    $('#myFieldError3').html("<p>Renseigner votre Telephone</p>");

                } else if (dataResult.statusCode == 4) {
                    $("#myFieldError4").show();
                    $('#myFieldError4').html("<p>Renseigner votre Email</p>");

                } else if (dataResult.statusCode == 5) {
                    $("#myFieldError5").show();
                    $('#myFieldError5').html("<p>Renseigner votre Objet de demande</p>");

                } else if (dataResult.statusCode == 6) {
                    $("#myFieldError6").show();
                    $('#myFieldError6').html("<p>Renseigner votre Commentaire </p>");

                } else if (dataResult.statusCode == 201) {
                    $("#success").show();
                    $('#success').html("<p>Un problème s'est produit lors de l'exécution de votre demande  !</p>");
                }

            }
        });
    } else {
        alert('Les champs doivent être remplis. ');
    }

}