<html>
<?php

// line 5 & 6 laten de PHP errors zien als deze er zijn. Zo kun je makkelijk fouten opsporen.
error_reporting(E_ALL);
ini_set('display_errors', 1);

// line 9 laat de standaardwaarde zien van de variable $email_error
$email_error = "";

// Als de form wordt gepost komt dit van toepassing
if (isset($_POST['email'])) {
  // vul hier je eigen email en onderwerp van bericht in. Komt terug op line 42
    $email_to = "thijsdonk2013@gmail.com";
    $email_subject = "Contact wil ik en snel";


  // als je het IP-adres wilt toevoegen bij een contactverzoek doe dan line 19 bij. Deze kun je ophalen door $ip te doen in bijv de $email_message.
    $ip = $_SERVER['REMOTE_ADDR'];

  //hier roep je de formulier informatie op die gepost is door de gebruiker. Je kunt zelf ook velden nog toevoegen
  // je maakt zegmaar van de waarde een variabele.
    $from = $_POST['from'];
    $frommail = $_POST['frommail'];
    $message = $_POST['message'];


  // zo roep je de errors in beeld als er iets fout gaat of iets mist. In dit geval heb ik de opdracht gegeven:
  // als waarde kleiner is dan (<) 1, laat de errormessage zien. Je kunt ook gebruik maken van !=, ==, >, etc. Google weet veel meer  vergelijkingen en of vereisten
    if (strlen($from) < 1) {

        $email_error = "Het eerste veld is niet ingevuld.";

      // als bovenstaande niet van toepassing is, doe de volgende actie.
      // Dit wordt veroorzaakt door  else if {}
    } else if (strlen($frommail) < 1) {

        $email_error = "Het tweede veld is niet ingevuld.";

    } else if (strlen($message) < 1) {

        $email_error = "Het derde veld is niet ingevuld.";

    }
  // nu er geen velden/waardes meer te controleren zijn kun je de email laten versturen.
  // $email_message  heb ik minified bc grote code.
  // $headers is een standaard eveneens als de @mail functie.
  else {
        $email_message = "<head> <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"> <meta content=\"telephone=no\" name=\"format-detection\"> <title>Responsive Email Template</title> <style type=\"text/css\"> .ReadMsgBody{width: 100%; background-color: #ffffff;}.ExternalClass{width: 100%; background-color: #ffffff;}body{width: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased; font-family: arial, sans-serif;}a{color:#D8D8D8; text-decoration:none}table{border-collapse: collapse;}body[yahoo] .desktop-hidden{max-height: 0px; overflow:hidden; max-height: 0px !important; overflow:hidden !important; display: none; display: none !important;}@media only screen and (max-width: 640px){body[yahoo] .deviceWidth{width:600px!important; padding:0;}body[yahoo] .center{text-align: center!important; display:block; margin-left:auto; margin-right:auto;}body[yahoo] .desktop-hidden{max-height: 0px; overflow:hidden; max-height: 0px !important; overflow:hidden !important; display: none; display: none !important;}body[yahoo] .mobile-bg{background-color:#ffffff!important}body[yahoo] .linkColor{color: #d8d8d8!important;text-decoration: none!important;}}@media only screen and (max-width: 479px){body[yahoo] .mobile-font{font-size: 11px!important;color:#777777!important;}body[yahoo] .mobile-font2{font-size: 14px!important;color:#666666!important;}body[yahoo] .mobile-font22{font-size: 22px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font20{font-size: 20px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font14{font-size: 14px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font10{font-size: 10px!important;color:#aaaaaa!important;display:block!important;}body[yahoo] .mobile-font12{font-size: 12px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font16{font-size: 16px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24{font-size: 24px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24c{font-size: 24px!important;color:#fff!important;display:block!important;}body[yahoo] .mobile-font22c{font-size: 22px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font14c{font-size: 14px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font16c{font-size: 16px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font12c{font-size: 12px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-link{color:#f47d31!important;}body[yahoo] .mobile-bg{background-color:#ffffff!important}body[yahoo] .center{text-align: center!important;}body[yahoo] .deviceWidth{width:320px!important; padding:0;}body[yahoo] .mobile-hidden{display:none !important;}body[yahoo] .desktop-hidden{max-height: none; overflow:visible; max-height: none !important; overflow:visible!important; display: block; display: block !important;}body[yahoo] .linkColor{color: #d8d8d8!important;text-decoration: none!important;}}/***** SMARTPHONE STYLING RULES *****/ @media only screen and (max-width: 600px){body[yahoo] .mobile-font{font-size: 11px!important;color:#777777!important;}body[yahoo] .mobile-font2{font-size: 14px!important;color:#666666!important;}body[yahoo] .mobile-font22{font-size: 22px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font20{font-size: 20px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font14{font-size: 14px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font12{font-size: 12px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font16{font-size: 16px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24{font-size: 24px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24c{font-size: 24px!important;color:#fff!important;display:block!important;}body[yahoo] .mobile-font22c{font-size: 22px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font14c{font-size: 14px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font16c{font-size: 16px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font12c{font-size: 12px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-link{color:#f47d31!important;}body[yahoo] .mobile-bg{background-color:#ffffff!important}body[yahoo] .center{text-align: center!important;}body[yahoo] .deviceWidth{width:320px!important; padding:0;}body[yahoo] .mobile-hidden{display:none !important;}body[yahoo] .desktop-hidden{max-height: none; overflow:visible; max-height: none !important; overflow:visible!important; display: block; display: block !important;}body[yahoo] .linkColor{color: #d8d8d8!important;text-decoration: none!important;}}</style></head><body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" yahoo=\"fix\" style=\"font-family: arial, sans-serif;\" bgcolor=\"#ffffff\"> <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" bgcolor=\"#ffffff\"> <tbody> <tr> <td width=\"100%\" valign=\"top\" style=\"padding-top:0px;margin:0;border:0;vertical-align: top;\"> <div class=\"mobile-hidden\"> <table width=\"600\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" class=\"mobile-hidden\" bgcolor=\"#ffffff\"> <tbody> <tr> <td style=\"min-width: 600px;\"></td></tr><tr> <td style=\"font-size: 0;background: #ffffff;\" align=\"center\"> Thijs Contactverzoek </td></tr></tbody> </table> </div></td></tr><tr> <td width=\"100%\" valign=\"top\" style=\"padding-top:0px;margin:0;border:0;vertical-align: top;\"> <div class=\"mobile-hidden\"> <table width=\"600\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" class=\"mobile-hidden\" bgcolor=\"#ffffff\"> <tbody> <tr> <td style=\"min-width: 600px\"></td></tr><tr> <td style=\"font-size: 0;background: #ffffff; padding: 0px 0px 0px 0px\" align=\"center\"> <a href=\"https://www.headspace.com/?_branch_match_id=376451886931337879&amp;utm_campaign=2017Sleep&amp;utm_content=SleepAM&amp;utm_medium=email&amp;utm_source=trialist\" target=\"_blank\" conversion=\"true\" alias=\"\"> <img src=\"http://hosting.fyleio.com/35437/public/Marketing/2017Sleep/Email_PM-v2.gif\" width=\"600\" style=\" display: block; max-width: 600px; width: 600px;margin:0 auto;\" border=\"0\" alt=\"\"> </a> </td></tr><tr> <td style=\"font-size: 0;background: #ffffff; width: 552px; padding:24px 24px 32px;\" align=\"left\"> <p style=\"line-height:28px;font-family: Arial Regular, sans-serif; font-size: 16px; letter-spacing:.8px; color: #605f5d;\"> Hallo Thijs.<br>Ik ben <strong>$from</strong> en ik wil contact met je opnemen. Leuk he. Mijn email is <strong>$frommail</strong>.<br>Dit wil ik tegen je zeggen:<br><br><strong>$message</strong><br><br><br>Groetjes,<br><strong>$from</strong></p></td></tr></tbody> </table> </div></tbody> </table></body>";
        $headers = 'From: ' . $frommail . "\r\n" .
            'Reply-To: ' . $frommail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // deze functie is niet echt veranderbaar omdat deze zo vastgesteld is in php.
        @mail($email_to, $email_subject, $email_message, $headers);

    // doordat deze emailerror in de succes/voer uit 'else' zit, komt hij automatisch naar voren als de else opgeroepen wordt.
        $email_error = "Bedankt voor je email, " . $from . "!";
    }
// Je zou ook nog via ajax een formulier maken, maar dat zijn weer een flink aantal stappen verder
}
?>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            crossorigin="anonymous"></script>
    -
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Contactformulier Thijs</h1>
            <?php if ($email_error == "") {
                ?>Zie regel 97 om te kijken hoe je deze melding en het blauwe vlak beneden kunt weghalen
                <!-- zelfde als in javascript zegmaar, zie regel 6, daar zeg ik wat de standaard waarde is van $email_error. Niets dus.
                  Ik vergelijk hier dus van als error = "(niets)" show { this } als die gevuld is (regels 17 tm 35 en 39) show die errormessage.
                  Als je de if rule weghaalt, zal er standaard een lege alert (blauwe vlak staan) zoals onderaan het formulier.
                  -->
                <?php
            } else { ?>
            <div class="alert alert-info">
                <strong><?php echo $email_error; ?></strong>
            </div>
            <?php } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <input type="text" name="from" class="form-input" placeholder="Uw naam">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <input type="email" name="frommail" class="form-input" placeholder="Uw emailadres">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <textarea style="resize:none" name="message" rows="5" cols="50" placeholder="Uw bericht"></textarea>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <button name="email" class="willemButton" type="submit" class="submit">Verzenden</button>
                    </div>
                </div>
            </form>
          <!-- deze kun je weghalen als je de bovenstaande info voor alerts heb gelezen :D -->
            <div class="alert alert-info">
                <strong><?php echo $email_error; ?></strong>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</div>
</body>
<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</footer>
</html>
