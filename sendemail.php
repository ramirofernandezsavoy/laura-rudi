<?php

// Define some constants
define( "RECIPIENT_NAME", "Laura Rudi" );
define( "RECIPIENT_EMAIL", "rawii.k@gmail.com" );

// Read the form values
$success = false;
$userName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\@\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$senderSubject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Message:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all required values exist, send the email (sin teléfono)
if ( $userName && $senderEmail && $senderSubject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $userName . " <" . $senderEmail . ">";
  $msgBody = "Nombre: " . $userName . "\nEmail: " . $senderEmail . "\nAsunto: " . $senderSubject . "\n\nMensaje:\n" . $message;
  $success = mail( $recipient, "Nuevo mensaje desde el sitio web", $msgBody, $headers );

  //Set Location After Successsfull Submission
  header('Location: contact.php?message=success');
}
else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: contact.php?message=error');	
}

?>