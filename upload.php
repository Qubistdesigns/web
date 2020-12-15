<?php
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$email .= $_REQUEST['email'];

if (isset($_POST['submit']) and ($_POST['email']) and ($_POST['comments']) ) {

//image upload begin
$upload_path = $config->paths->assets . "files/useruploads/";
$user_image = new WireUpload('user_image'); // References the name of the field in the HTML form that uploads the photo
$user_image->setMaxFiles(5);
$user_image->setOverwrite(false);
$user_image->setDestinationPath($upload_path);
$user_image->setValidExtensions(array('jpg', 'jpeg', 'png', 'gif'));
 
// execute upload and check for errors
$files = $user_image->execute();
//image upload end
     
$to = 'amreenirsa@gmail.com';
$subject = 'Feedback from my site';
$message = 'Name: ' . $sanitizer->text($input->post->name) . "\r\n\r\n";
$message .='Email: ' . $sanitizer->email($input->post->email)  . "\r\n\r\n";
$comments = $sanitizer->entities($sanitizer->textarea($input->post->comments));
$message .= 'Comments: ' . $comments;

$success = $email;
$success .=$message;

$mail = wireMail();
$mail->to($to)->from('amreenirsa@gmail.com');  
$mail->subject($subject); 
$mail->body($message);
$mail->send(); 
}

else {
header("location: error-page");
exit;
}
?>


