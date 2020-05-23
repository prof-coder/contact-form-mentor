<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if(isset($_GET['submit'])){
    $ime = $_GET['ime'];
    $telefon = $_GET['telefon'];
    $email = $_GET['email'];

    $to = "test@massagesalonspaj.com";
    $subject="a new contact";
    $txt = "You have received an email from ".$ime.".\n\n"."Phone number: $telefon";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "To: Admin <$to>\r\n";
    $headers .= "From: $ime <$email>\r\n";

    if (mail($to, $subject, $txt, $headers)) {
        echo "Message accepted";
    } else {
        echo "Error: Message not accepted";
        print_r(error_get_last());
    }
}
?>

<script type="text/javascript">location.href="/kontakt.html"</script>