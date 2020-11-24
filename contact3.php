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

 

  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename; 
          
    $db = mysqli_connect("localhost", "root", "", "photos"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO image (filename) VALUES ('$filename')"; 
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  $result = mysqli_query($db, "SELECT * FROM image"); 


 $message="UserName: $username1 \n\n  Number: $number1 \n\n  Email: $email1 \n\n  Logname: $logname 
          Slogan:$slogan \n\n  BusinessDes: $BusinessDes \n\n  Color: $color \n\n  Currentlogo: $currentlogo 
          \n\n  ExampleLogo: $ExampleLogo  \n\n  Note: note" \n\n  msg: "" " ;
 
 $headers = "From: $username1,";
 
 $sent = mail($to, $subject, $message, $headers);
 
 if($sent)
 
 {echo "successfully sent"; }
 
 else
 
 {echo "your msg is not sent, there is some error!"; }




?> 
 




