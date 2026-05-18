<?php

// configure
$daripengirim = 'info@andema.co.id'; 
$kirimkepada = 'marketing@andema.co.id';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email','company' => 'Company', 'address' => 'Address', 'message' => 'Message' ); // array variable name => Text to appear in email
$okMessage = 'Contact form successfully submitted. Thank you, we will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

include "classes/class.phpmailer.php";
$mail = new PHPMailer;

$mail->IsSMTP();

$mail->SMTPSecure = 'ssl';

$mail->Host = "andema.co.id"; //hostname masing-masing provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;

$mail->Timeout = 60; // timeout pengiriman (dalam detik)
$mail->SMTPKeepAlive = true; 

$mail->Username = "web@andema.co.id"; //user email
$mail->Password = "6yeJW624eNZSQx5"; //password email
$mail->SetFrom("web@andema.co.id","web@andema.co.id"); //set email pengirim
$mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
$mail->AddAddress("marketing@andema.co.id","marketing@andema.co.id"); //tujuan email

// let's do the sending

try
{
    $emailText = "<p>You have new message from contact form</p>";
    $emailText .="<p>=============================</p>";

    if(isset($_POST)){
        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        $lastname = htmlspecialchars(stripslashes(trim($_POST['surname'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
        $company = htmlspecialchars(stripslashes(trim($_POST['company'])));
        $companyAddress = htmlspecialchars(stripslashes(trim($_POST['address'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
        
        if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
          $name_error = 'Invalid name';
          throw new Exception($name_error);
        }

        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
            $email_error = 'Invalid email';
            throw new Exception($email_error);
        }
        if(!preg_match("/^[0-9]+$/", $phone)){
            $email_error = 'Invalid phone number';
            throw new Exception($email_error);
        }
        if(strlen($message) === 0){
            $message_error = 'Your message should not be empty';
            throw new Exception($message_error);
        }
    }
    
    
    
    $emailText.="<p>Name: {$name} ${lastname}</p>";
    $emailText.="<p>Email : {$email}</p>";
    $emailText.="<p>Phone : {$phone}</p>";
    $emailText.="<p>Company : {$company}</p>";
    $emailText.="<p>Company Address : {$companyAddress}</p>";
    $emailText.="<p>Message : {$message}</p>";
    
    // phpmailer section
    $mail->MsgHTML($emailText);
    
    if($mail->Send()) $responseArray = array('type' => 'success', 'message' => $okMessage);
    else throw New Exception($errorMessage);
    
}
catch (Exception $e)
{
    $e->getMessage();
    $responseArray = array('type' => 'danger', 'message' => $e);
}

// if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//     $encoded = json_encode($responseArray);
    
//     header('Content-Type: application/json');
    
//     echo $encoded;
// }
// else {
//     echo $responseArray['message'];
// }
