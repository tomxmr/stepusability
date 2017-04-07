<!DOCTYPE html>
<html lang="de">
<head>

    <title>Login | step</title>

    <?php include ('head.html'); ?>


</head>
<body>

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img class="img-fluid p-5" src="img/logo-color.png" alt="" />
                <h1 class="text-center">Login</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                    <form>
                        <!--  Normales  einzeiliges  Eingabefeld  -->
                        <div class="form-group">
                            <input id="input1" type="text" class="form-control text-center" placeholder="Benutzername">
                        </div>
                        <!--  Passwortfeld  -->
                        <div class="form-group">
                            <input id="input2" class="form-control text-center" type="password" placeholder="Passwort">
                        </div>

                        <!--  Schaltflaeche  als  Button  -->
                       <div class="text-center">
                           <a href="#" class="btn btn-submit-orange btn-lg active" role="button" aria-pressed="true">Login</a>

                    </div>
                </form>

                <div class="row pt-3 text-center">
                    <div class="col-12">
                        <a class="login-hyperlink" data-toggle="modal" data-target="#loginHelp" href="#">Login-Daten vergessen?</a>
                    </div>
                    <div class="col-12">
                        <a class="login-hyperlink" data-toggle="modal" data-target="#register" href="#">Noch nicht registriert?</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="loginHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content py-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login-Daten vergessen?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5 py-5">
                Geben Sie Ihren Benutzernamen und Ihre bei der Anmeldung hinterlegte E-Mail Adresse an.<br>
                Wir schicken Ihnen ein neues Passwort per E-Mail zu.
            </div>
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input3" type="text" class="form-control text-center"  placeholder="Benutzername">
            </div>
            <!--  E-Mail  -->
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input4" class="form-control text-center" type="email" placeholder="E-Mail Adresse">
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-submit-orange btn-lg">Passwort anfordern</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content py-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrierung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5 py-5">
                Füllen Sie bitte das nachstehende Kontaktformular vollständig aus.<br>
                Wir bearbeiten IhreAnfrage so schnell wie möglich.
            </div>
            <!-- Firma -->
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input5" type="text" class="form-control text-center"  placeholder="Firma*">
            </div>
            <!-- Name -->
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input6" type="text" class="form-control text-center"  placeholder="Name*">
            </div>
            <!-- Vorname -->
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input7" type="text" class="form-control text-center"  placeholder="Vorname*">
            </div>
            <!--  E-Mail  -->
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input8" class="form-control text-center" type="email" placeholder="E-Mail Adresse*">
            </div>
            <!-- Nachricht -->
            <div class="form-group col-12 text-center px-5 py-2">
                <input id="input9" type="text" class="form-control text-center" placeholder="Nachricht">
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-submit-orange btn-lg">Senden</button>
            </div>
        </div>
    </div>
</div>
<?php include ('scripts.html'); ?>
</body>
</html>