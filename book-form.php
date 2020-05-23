<?php



if(isset($_POST['submit'])){

    $name = $_POST ['name'];

    $number = $_POST['number'];

    $email = $_POST['email'];

    $tretman = $_POST['tretman'];

    $dan = $_POST['dan'];

    $month = $_POST['month'];

    $godina = $_POST['godina'];

    $vreme = $_POST['vreme'];



    $to = "info@salonspaj.com";

    $headers = "From:".$email;

    $txt = "you have received an email from ".$name.".\n\n".$message

    mail();



  



    mail($to,  $name);

    header("Location:book.html");



}



?>