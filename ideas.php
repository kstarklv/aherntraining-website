<?php
  $header = "ideas";
?>
<?php include("top.php") ?>

<form method="post" action="ideas.php" name="Idea Form">

<!-- PHPMAIL Start -->
<?php
if (isset($_POST['sendit'])) {
	$sendnow = $_POST['sendit'] ;
} else {
	$sendnow = "" ;
}
if ($sendnow == 'Y') {
if (isset($_POST['sendmailto'])) {
	$sendmailto = $_POST['sendmailto'] ;
} else {
	$sendmailto = "" ;
}
if (isset($_POST['NAME'])) {
	$name = $_POST['NAME'] ;
} else {
	$name = "" ;
}
if (isset($_POST['LOCATION'])) {
	$location = $_POST['LOCATION'] ;
} else {
	$location = "" ;
}
if (isset($_POST['TOPIC'])) {
	$topic = $_POST['TOPIC'] ;
} else {
	$topic = "" ;
}
if (isset($_POST['EXPERT'])) {
	$expert = $_POST['EXPERT'] ;
} else {
	$expert = "" ;
}
if (isset($_POST['IDEA'])) {
	$idea = $_POST['IDEA'] ;
} else {
	$idea = "" ;
}
include("sndatmail.php");

}
?>
<!-- PHPMAIL End   -->
If you have an idea for a new Training topic or Learning Activity, fill out the form below with the following information:
<ul>
<li> <strong>Name:</strong> Your first and last name
<li> <strong>Location:</strong> The location you work at
<li> <strong>Topic:</strong> A one or two word general topic <br />
<em>EXAMPLE: Parts or Email</em>
<li> <strong>Suggested Expert:</strong> The first and last name of someone in the company who may be an expert in this topic
<li> <strong>Idea:</strong> A description of the Training topic or Learning Activity - include as much information as possible.
</ul>
The Training Department processes all Learning Activity requests within 24 hours. 
<br /><br />
<input type="hidden" name="sendit" value="<?PHP echo $sendnow?>">
<input type="hidden" name="sendmailto" value="la@ahern.com">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
	<td width="50%" valign="top"><strong>Name:</strong><br />
	<input type="text" name="NAME" size="40">
	</td>
	<td width="50%" valign="top"><strong>Location:</strong><br />
	<input type="text" name="LOCATION" size="40"></td>
</tr>
<tr>
	<td valign="top"><strong>Topic:</strong><br />
	<input type="text" name="TOPIC" size="40"></td>
	<td valign="top"><strong>Suggested Expert:</strong><br />
	<input type="text" name="EXPERT" size="40"></td>
</tr>
<tr>
	<td colspan="2" valign="top"><strong>Idea:</strong><br />
	  <textarea name="IDEA" cols="73" rows="3"></textarea></td>
</tr>
</table>
<!-- WAYNE LOOK AT ME -->
<input type="button" name="authenticate" value="Send Idea" onclick="sendphpmail()"/>
<!-- OK WAYNE STOP LOOKING AT ME -->
</form>
Remember, you can always send Training ideas or Learning Activity requests in an email from Outlook or your BlackBerry to <a href="mailto:la@ahern.com">LA@ahern.com</a>.  
<br /><br />
<div align="center" style="margin-top: 100px;"><?php require("randomlink.php"); ?></div>
<?php include("bottom.php") ?>