<?
$name = trim(stripslashes($_POST['your_name']));
$email = trim(stripslashes($_POST['your_email']));
$message = trim(stripslashes($_POST['your_message']));
//var_dump($_POST['contact_options']);

$recipient = "qwertsy2@gmail.com";
$email_from = $name." <".$email.">";

$body = "Name: ".$name;
$body .= "\nEmail: ".$email;
$body .= "\nMessage: ".$message;

$success = 1; //mail($recipient, "message from sitename site", $body, "From: ".$email_from);

if ($success){
    echo "message sent!";
}else{
    echo "didn't work";
}
?>
