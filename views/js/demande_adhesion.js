$(document).ready(function() {

    verif_demande_adhesion();


});

function verif_demande_adhesion() {


    var $firstname = $('#firstName'),
        $lastname = $('#lastName'),
        $adresse = $('#adresse'),
        $phone = $('#mobileNumber'),
        $email = $('#emailAddress'),
        $subject = $('#subject'),
        $message = $('#message'),
        $envoyer = $('#envoyer'),
        $erreur = $('#erreur'),
        $champ = $('.form-control');

    $champ.keyup(function() {
        if ($($firstname).val().length < 5) {
            $($firstname).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($firstname).css({
                borderColor: 'green',
                color: 'green'
            });
        };

        if ($($lastname).val().length < 5) {
            $($lastname).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($lastname).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if ($($adresse).val().length < 10) {
            $($adresse).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($adresse).css({
                borderColor: 'green',
                color: 'green'
            });
        }

        if (!Portable_Valide($('#mobileNumber').val())) {
            $($phone).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($phone).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if (!isValidEmailAddress($('#emailAddress').val())) {
            $($email).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($email).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if ($($subject).val().length < 10) {
            $($subject).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($subject).css({
                borderColor: 'green',
                color: 'green'
            });
        }
        if ($($message).val().length > 250) {
            $($message).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $($message).css({
                borderColor: 'green',
                color: 'green'
            });
        }
    });
    //verification email 
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
        return pattern.test(emailAddress);
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
        if (champ.val() == "") { // si le champ est vide
            $erreur.css('display', 'block'); // on affiche le message d'erreur
            champ.css({ // on rend le champ rouge
                borderColor: 'red',
                color: 'red'
            });
        } else {
            return (true);
        }
    }

    //appel ajax pour enregistre les données du formlaire  dans la base de données 
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();
        verifier($firstname);
        verifier($lastname);
        verifier($adresse);
        verifier($phone);
        verifier($email);
        verifier($subject);
        verifier($message);
        var $this = $(this);
        if (verifier($firstname) && verifier($lastname) && verifier($adresse) && Portable_Valide($('#mobileNumber').val()) && verifier($email) && verifier($subject) && verifier($message)) {
            $.ajax({
                url: 'models/demande_adhesion.php', // On récupère l'action (ici action.php)
                type: 'POST', // On récupère la méthode (post)
                data: $this.serialize(), // On sérialise les données = Envoi des valeurs du formulaire
                dataType: 'json', // JSON

                success: function(dataResult) {
                    // var dataResult = JSON.parse(dataResult);

                    if (dataResult.statusCode == 200) {
                        $('#registrationForm').find('input:text').val('');
                        $('#registrationForm').find('#message').val('');
                        $("#success").show();
                        $('#success').html("<p>Votre demande à été enregister avec success  </p>");
                    } else if (dataResult.statusCode == 201) {
                        alert("<p>Un problème est survenu pendant l'exécution de votre demande  !</p>");
                    }

                }
            });
        } else {
            alert('Les champs doivent être remplis. ');
        }
    });
};