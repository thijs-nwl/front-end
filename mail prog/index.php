<html>
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $email_error = "";

    if (isset($_POST['email'])) {
        $email_to = "thijsdonk2013@gmail.com";
        $email_subject = "Contact";

        $ip = $_SERVER['REMOTE_ADDR'];

        $from = $_POST['from'];
        $frommail = $_POST['frommail'];
        $message = $_POST['message'];

        if (strlen($from) < 1) {
            $email_error = "Het eerste veld is niet ingevuld.";
        } else if (strlen($frommail) < 1) {
            $email_error = "Het tweede veld is niet ingevuld.";
        } else if (strlen($message) < 1) {
            $email_error = "Het derde veld is niet ingevuld.";
        }
      else {
            $email_message = "<head> <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"> <meta content=\"telephone=no\" name=\"format-detection\"> <title>Responsive Email Template</title> <style type=\"text/css\"> .ReadMsgBody{width: 100%; background-color: #ffffff;}.ExternalClass{width: 100%; background-color: #ffffff;}body{width: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased; font-family: arial, sans-serif;}a{color:#D8D8D8; text-decoration:none}table{border-collapse: collapse;}body[yahoo] .desktop-hidden{max-height: 0px; overflow:hidden; max-height: 0px !important; overflow:hidden !important; display: none; display: none !important;} @media only screen and (max-width: 640px){body[yahoo] .deviceWidth{width:600px!important; padding:0;}body[yahoo] .center{text-align: center!important; display:block; margin-left:auto; margin-right:auto;}body[yahoo] .desktop-hidden{max-height: 0px; overflow:hidden; max-height: 0px !important; overflow:hidden !important; display: none; display: none !important;}body[yahoo] .mobile-bg{background-color:#ffffff!important}body[yahoo] .linkColor{color: #d8d8d8!important;text-decoration: none!important;}}@media only screen and (max-width: 479px){body[yahoo] .mobile-font{font-size: 11px!important;color:#777777!important;}body[yahoo] .mobile-font2{font-size: 14px!important;color:#666666!important;}body[yahoo] .mobile-font22{font-size: 22px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font20{font-size: 20px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font14{font-size: 14px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font10{font-size: 10px!important;color:#aaaaaa!important;display:block!important;}body[yahoo] .mobile-font12{font-size: 12px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font16{font-size: 16px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24{font-size: 24px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24c{font-size: 24px!important;color:#fff!important;display:block!important;}body[yahoo] .mobile-font22c{font-size: 22px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font14c{font-size: 14px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font16c{font-size: 16px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font12c{font-size: 12px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-link{color:#f47d31!important;}body[yahoo] .mobile-bg{background-color:#ffffff!important}body[yahoo] .center{text-align: center!important;}body[yahoo] .deviceWidth{width:320px!important; padding:0;}body[yahoo] .mobile-hidden{display:none !important;}body[yahoo] .desktop-hidden{max-height: none; overflow:visible; max-height: none !important; overflow:visible!important; display: block; display: block !important;}body[yahoo] .linkColor{color: #d8d8d8!important;text-decoration: none!important;}}/***** SMARTPHONE STYLING RULES *****/ @media only screen and (max-width: 600px){body[yahoo] .mobile-font{font-size: 11px!important;color:#777777!important;}body[yahoo] .mobile-font2{font-size: 14px!important;color:#666666!important;}body[yahoo] .mobile-font22{font-size: 22px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font20{font-size: 20px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font14{font-size: 14px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font12{font-size: 12px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font16{font-size: 16px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24{font-size: 24px!important;color:#4d4d4d!important;display:block!important;}body[yahoo] .mobile-font24c{font-size: 24px!important;color:#fff!important;display:block!important;}body[yahoo] .mobile-font22c{font-size: 22px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font14c{font-size: 14px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font16c{font-size: 16px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-font12c{font-size: 12px!important;color:#ffffff!important;display:block!important;}body[yahoo] .mobile-link{color:#f47d31!important;}body[yahoo] .mobile-bg{background-color:#ffffff!important}body[yahoo] .center{text-align: center!important;}body[yahoo] .deviceWidth{width:320px!important; padding:0;}body[yahoo] .mobile-hidden{display:none !important;}body[yahoo] .desktop-hidden{max-height: none; overflow:visible; max-height: none !important; overflow:visible!important; display: block; display: block !important;}body[yahoo] .linkColor{color: #d8d8d8!important;text-decoration: none!important;}}</style></head><body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" yahoo=\"fix\" style=\"font-family: arial, sans-serif;\" bgcolor=\"#ffffff\"> <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" bgcolor=\"#ffffff\"> <tbody> <tr> <td width=\"100%\" valign=\"top\" style=\"padding-top:0px;margin:0;border:0;vertical-align: top;\"> <div class=\"mobile-hidden\"> <table width=\"600\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" class=\"mobile-hidden\" bgcolor=\"#ffffff\"> <tbody> <tr> <td style=\"min-width: 600px;\"></td></tr><tr> <td style=\"font-size: 0;background: #ffffff;\" align=\"center\"> Thijs Contactverzoek </td></tr></tbody> </table> </div></td></tr><tr> <td width=\"100%\" valign=\"top\" style=\"padding-top:0px;margin:0;border:0;vertical-align: top;\"> <div class=\"mobile-hidden\"> <table width=\"600\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" class=\"mobile-hidden\" bgcolor=\"#ffffff\"> <tbody> <tr> <td style=\"min-width: 600px\"></td></tr><tr> <td style=\"font-size: 0;background: #ffffff; width: 552px; padding:24px 24px 32px;\" align=\"left\"> <p style=\"line-height:28px;font-family: Arial Regular, sans-serif; font-size: 16px; letter-spacing:.8px; color: #605f5d;\"> Hallo Josee.<br>Mijn naam is <strong>$from</strong> en ik wil graag contact met je opnemen. Mijn email is <strong>$frommail</strong>.<br>Dit wil ik tegen je zeggen:<br><br><strong>$message</strong><br><br><br>Mvg,<br><strong>$from</strong></p></td></tr></tbody> </table> </div></tbody> </table></body>";
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

    }
  ?>
<head>
  <title>email</title>
  <link rel='stylesheet' href='style.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id="formPos">
      <h1>Get in touche with me</h1>
      <form method="post" action="">
        <input type="text" name="from" placeholder="your name" required><br>
        <input type="email" name="frommail" placeholder="Your email address" required><br>
        <textarea name="message" placeholder="Your message" required></textarea><br>
        <button name="email" class="formbut" type="submit">Send</button><br>
      </form>
  </div>

  <button id='but' type="button" name="button">test</button>
</body>
<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</footer>

</html>
