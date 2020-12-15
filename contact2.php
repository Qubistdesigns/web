<?php
 
 $to = "Qubistdesigns@yahoo.com  ";
 
 $subject = "An Inquiry2";

 $productname = $_REQUEST['productname'];

 $productdetails = $_REQUEST['peoductdetails'];

 $productprice = $_REQUEST['ProductPrice'];

 $username = $_REQUEST['username1'];

 $email = $_REQUEST['email'];

 $number = $_REQUEST['phonenumber'];
 
 $message = $_REQUEST['message'];
 
 $message=" Productname: $productname \n\n productdetails: $productdetails \n\n ProductPrice: $productprice \n\n
        UserName: $username \n\n  Email: $email \n\n  Number: $number  \n\n  Message: $message  ";
 
 $headers = "From: $number,";
 
 $sent = mail($to, $subject, $message, $headers);
 
 if($sent)
 
 {echo "successfully sent"; }
 
 else
 
 {echo "your msg is not sent, there is some error!"; }
 
 ?>
 
 