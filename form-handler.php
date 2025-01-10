 <?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'git@github.com:AyangNovaAnggraeni/uas.git';

$email_subject = 'New FormSubmission';

$email_body ="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

$to = 'ayangnovaanggraeni371@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

sendmail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?> 


