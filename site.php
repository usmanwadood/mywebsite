<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$order1 = $_POST['order1'];
$quantity1 = $_POST['quantity1'];
$order2 = $_POST['order2'];
$quantity2 = $_POST['quantity2'];
$order3 = $_POST['order3'];
$quantity3 = $_POST['quantity3'];
$phone = $_POST['phone'];

$myMail = "usmanwadood41@gmail.com";
$headers = "Order Placed By $fname " .$fname;
$text = "Name: $fname $lname \n Order 1: $order1 x $quantity1 \n Order 2: $order2 x $quantity2 \n Order 3: $order3 x $quantity3 \n\n Contact: $phone \n Email: $mail \n Adress: $address \n";
$subject = "Shop Order";

if(isset($_POST['submit'])) {

    mail($myMail, $subject, $text, $headers);
    header("Location: site.php?mailsent");
}

?>