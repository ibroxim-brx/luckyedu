<?php
$name = $_POST['usern-name'];
$phone = $_POST['user-phone'];
$email = $_POST['user-email'];
$token = "1054630785:AAHny5f-iMWFZpI8ZSQhbyxZErCNoqwjOHk";
$chat_id = "-496692311";
$arr = array(
'user name' =>$name,
'user phone' => $phone,
'email'=> $email
);

foreach ($arr as $key => $value) {
	$txt .= "<b>".$key."<b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={chat_id}
	&parse_mode=html&text={$txt}","r")

if ($sendToTelegram) {
	header('Location: index.html');
}
else {
	echo "error";
}
?>
<!-- <?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$message = $_POST['message'];

$email_form = 'ibroximjn.yusupjonov@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name./n".
				"User Email: $visitor_email.\n".
					"User Message: $message.\n";

$to = "ibroximjn.yusupjonov@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body, $headers);

header("Location: contact_us.html")
> -->