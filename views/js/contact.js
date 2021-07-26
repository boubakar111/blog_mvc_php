// function validateEmail(email) {
//     var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
//     return re.test(email);
// }

// function Portable_Valide(PortableTest) {
//     var regex = new RegExp(/^(06|07)[0-9]{8}/gi);

//     if (regex.test(PortableTest)) {
//         return (true);
//     } else {
//         return (false);
//     }
// }

// function Verification() {

//     // Récupérer lavaleur des champs nom,prenom, telephone, email, subject,commentaire  
//     var Nom = document.getElementById('form_nom').value;
//     var Prenom = document.getElementById('form_prenom').value;
//     var Telephone = document.getElementById('form_telephone').value;
//     var Email = document.getElementById('form_email').value;
//     var Sujet = document.getElementById('form_subject').value;
//     var Commentaire = document.getElementById('form_commentaire').value;

//     // Contrôle sur le nom
//     if (Nom == '') {
//         document.getElementById('myFieldError1').innerHTML = 'Le champ Nom ne peut être vide';

//         return false;
//     } else {
//         document.getElementById('myFieldError1').style.display = "none";
//     }

//     if (Prenom == '') {
//         document.getElementById('myFieldError2').innerHTML = 'Le champ Prenom ne peut être vide';
//         // Permet de bloquer l'envoi du formulaire
//         return false;
//     } else {
//         document.getElementById('myFieldError2').style.display = "none";
//     }
//     if (Telephone == '' || (Portable_Valide(Telephone) != true)) {
//         document.getElementById('myFieldError3').innerHTML = 'Le champ Télephone ne peut être vide';
//         return false;

//     } else {
//         document.getElementById('myFieldError3').style.display = "none";
//     }

//     if (Email == '' || validateEmail(Email) == false) {
//         document.getElementById('myFieldError4').innerHTML = 'Le champ email  ne peut être vide';
//         return false;
//     } else {
//         document.getElementById('myFieldError4').style.display = "none";
//     }

//     if (Sujet == '') {

//         document.getElementById('myFieldError5').innerHTML = 'Le champ Sujet ne peut être vide';

//         return false;
//     } else {
//         document.getElementById('myFieldError5').style.display = "none";
//     }
//     if (Commentaire == '' || Commentaire.length < 10) {

//         document.getElementById('myFieldError6').innerHTML = 'Le champ Message ne peut être vide';

//         return false;
//     } else {
//         document.getElementById('myFieldError6').style.display = "none";
//     }
// }