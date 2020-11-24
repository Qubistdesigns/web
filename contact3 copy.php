<?php
 
 $to = "amreenirsa@gmail.com ";
 
 $subject = "An Inquiry3";

 $username1 = $_REQUEST['name3'];
 
 $number1 = $_REQUEST['number3'];

 $email1 = $_REQUEST['email3'];
 
 $logname = $_REQUEST['logname'];

 $slogan = $_REQUEST['slogan'];

 $BusinessDes = $_REQUEST['BusinessDes'];

 $color = $_REQUEST['color'];

 $currentlogo = $_REQUEST['currentlogo'];

 $ExampleLogo = $_REQUEST['examplelogo'];

 $note = $_REQUEST['note'];


 $message="UserName: $username1 \n\n  Number: $numbe1r \n\n  Email: $email1 \n\n  Logname: $logname 
          Slogan:$slogan \n\n  BusinessDes: $BusinessDes \n\n  Color: $color \n\n  Currentlogo: $currentlogo 
          \n\n  ExampleLogo: $examplelogo  \n\n  Note: note";
 
 $headers = "From: $username1,";
 
 $sent = mail($to, $subject, $message, $headers);
 
 if($sent)
 
 {echo "successfully sent"; }
 
 else
 
 {echo "your msg is not sent, there is some error!"; }

 if(isset($_POST['submit'])){
    // Count total files
    $countfiles = count($_FILES['file']['name']);
    
    // Looping all files
    for($i=0;$i<$countfiles;$i++){
      $filename = $_FILES['file']['name'][$i];
      
      // Upload file
      move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
       
    }
   } 
 
 ?>



