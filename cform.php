 <?php
  $header = "customersupport";
?>
<?php include("top.php") ?>

<form method="post" action="cform.php" name="Idea Form">

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
</br>
<input type="hidden" name="sendit" value="<?PHP echo $sendnow?>">
<input type="hidden" name="sendmailto" value="waynes@ahern.com.com">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
	<td width="50%" valign="top">Name:</br>
	<input type="text" name="NAME" size="40">
	</td>
	<td width="50%" valign="top">Location:</br>
	<input type="text" name="LOCATION" size="40"></td>
</tr>
<tr>
	<td valign="top">Topic:</br>
	<input type="text" name="TOPIC" size="40"></td>
	<td valign="top">
	Suggested Expert:</br>
	<input type="text" name="EXPERT" size="40"></td>
</tr>
<tr>
	<td colspan="2" valign="top">Idea:</br>
	  <textarea name="IDEA" cols="41" rows="3"></textarea></td>
</tr>
</table>
<div align="right" style="margin-right: 85px;">

<!-- WAYNE LOOK AT ME -->
<!-- <input type="submit" name="authenticate" value="Send Request"/> -->
<input type="button" name="authenticate" value="Send Request" onclick="sendphpmail()"/>
<!-- OK WAYNE STOP LOOKING AT ME -->
</br></br>
</div>
</form>
<!--end of page content-->

<?php include("bottom.php") ?>
