<?php
require_once("atMailClass.inc");

$lines = null;
$lines = file("at_email.txt");
$altbody = null;
foreach ($lines as $line_num => $line) {
	switch (trim($line)) {
		case "<!-- name -->":
			$altbody .= $name;
			break;
		case "<!-- location -->":
			$altbody .= $location;
			break;
		case "<!-- topic -->":
			$altbody .= $topic;
			break;
		case "<!-- expert -->":
			$altbody .= $expert;
			break;
		case "<!-- idea -->":
			$altbody .= $idea;
			break;
		default:
		$altbody .= $line;
	}
}

$lines = null;
$lines = file("at_email.html.txt");
$body = null;
foreach ($lines as $line_num => $line) {
	switch (trim($line)) {
		case "<!-- name -->":
			$body .= $name;
			break;
		case "<!-- location -->":
			$body .= $location;
			break;
		case "<!-- topic -->":
			$body .= $topic;
			break;
		case "<!-- expert -->":
			$body .= $expert;
			break;
		case "<!-- idea -->":
			$body .= $idea;
			break;
		default:
		$body .= $line;
	}
}

define("SMTP_MODE", "enabled");
define("SMTP_HOST", "10.100.10.3");
define("SMTP_PORT", null);
define("SMTP_USERNAME", null);
define("SMTP_PASSWORD", null);

$mailer = new FreakMailer();
$mailer->AddReplyTo("Ahern Training Site", "webmaster@aherntraining.com"); 
$mailer->Subject = "Live Training Idea Submission";
$mailer->Body = $body;
$mailer->AltBody = $altbody;
$mailer->isHTML(true);
$mailer->AddAddress($sendmailto, $sendmailto);

$tmmailsent = $mailer->Send();

$tmmailerror = $mailer->IsError();

echo "<!-- tmmailerror = ";
echo $tmmailerror;
echo " -->";

echo "<!-- error info = ";
echo $mailer->ErrorInfo;
echo " -->";

$mailer->ClearAddresses();
$mailer->ClearAttachments();

echo "<input type=\"hidden\" name=\"wassent\" value=\"Y\">";

 ?>