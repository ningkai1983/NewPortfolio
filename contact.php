<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "gaojing1029@gmail.com"; // Your email address here
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  //echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
echo json_encode( array("status" => mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>")) );

// redirect to success page 
// if ($success){
//   echo "Succes";
// }
// else{
//   echo "Error";
//}
?>