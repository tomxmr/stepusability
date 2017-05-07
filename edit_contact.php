<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-contacts">

<?php include ('navigation.html'); ?>

<section id="contacts" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Kontakte</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="view_contact.php">
                    <div class="icon-check d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Speichern</span></a>
            </div>
        </div>
    </div>

    <?php include ('contactlist.html');?>

    <!--Form-->
    <div class="kontaktinfos pt-5">
        <div class="form-group pt-5 col-lg-8 offset-lg-4">

            <form>
                <div class="form-group row">
                    <div class="profile-header-img">
                        <img class="img-circle" src="img/anna.jpg" />
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="inputFirstName" value="Anna" placeholder="Vorname">
                        <input type="text" class="form-control" id="inputName" value="Apfel" placeholder="Nachname">
                        <input type="text" class="form-control" id="inputName" value="Apple" placeholder="Firma">

                    </div>
                    <div class="col-lg-4">
                        <div>
                            <span class="star icon-star"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-lg-3 form-control-label">Kontaktmöglichkeiten</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" value="anna.apfel@apple.com" id="inputEmail3" placeholder="E-Mail">
                        <input class="form-control" type="text" value="012345667" id="inputPhone" placeholder="Mobil">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputBirthday" class="col-lg-3 form-control-label">Geburtsdatum</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="date"  id="inputBirthday" value="01.01.1990" placeholder="Geburtstag">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSkill" class="col-lg-3 form-control-label">Fähigkeiten</label>
                    <div class="col-lg-5">
                        <div class="chip">
                            <input type="text" class="form-control" id="inputSkill" value="Java" placeholder="Skill 1">
                            <input type="text" class="form-control" id="inputSkill" value="Android" placeholder="Skill 2">
                            <input type="text" class="form-control" id="inputSkill" value="CSS" placeholder="Skill 3">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress" class="col-lg-3 form-control-label">Anschrift</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="inputAddress" value="Ahornstraße 22" placeholder="Straße & Hausnr.">
                        <input type="text" class="form-control" id="inputAddress" value="12345" placeholder="PLZ">
                        <input type="text" class="form-control" id="inputAddress" value="Nürnberg" placeholder="Ort">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRole" class="col-lg-3 form-control-label">Rolle</label>
                    <div class="col-lg-5">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" checked>
                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                Team</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                Proband</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""
                                >
                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                Kunde</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-submit-orange btn-md">Kontakt löschen</button>
                    <button type="button" class="btn btn-submit-orange btn-md" href="view_contact.php">Kontakt speichern</button>
                </div>
        </div>
    </div>
</section>

<?php include ('scripts.html'); ?>
<script>

    var h = $(window).height();

    var header_h = $(".page-top").height();


    $(".contact-sidebar").height(h - header_h);
    $( window ).resize( function(){
        h = $(window).height();
        $(".contact-sidebar").height(h - header_h);
    });


    $(".star.glyphicon").click(function() {
        $(this).toggleClass("glyphicon-star glyphicon-star-empty");
    });
</script>


</body>
</html>