<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="styles.css" type="text/css" />
<TITLE>Ahern Training</TITLE>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function sendphpmail() { 
  if (typeof document.forms[0] != "undefined") {
    if (typeof document.forms[0].NAME != "undefined") {
      if (document.forms[0].NAME.value == " ") {
	alert("Please Provide Your Name");
      } else {
	document.forms[0].sendit.value = "Y";
 	document.forms[0].submit();  
      }
    }
  } 
}
function phpmailsent() { 
  if (typeof document.forms[0] != "undefined") {
   if (typeof document.forms[0].wassent != "undefined") {
     if (document.forms[0].wassent.value == "Y") {
		alert("Thank you!  Your training idea has been sent.");
     } 
   }
  }
}
//-->
</script>
</head>
<BODY onload="phpmailsent()">

<div id="container">

	<div id="outer">
 		<div id="inner">
 			<div id="left">
<table width="270" height="449" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td><IMG SRC="images/top-left.png" WIDTH="270" HEIGHT="103"><br />
<IMG SRC="images/navnull.png" WIDTH=270 HEIGHT=47 BORDER=0><br />
<a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','images/nav-home2.png',1)"><img src="images/nav-home1.png" id="home" name="home" width="270" height="25" alt="home" class="navbuttons" border="0"></a><br />
<!--<a href="team.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('team','','images/nav-team2.png',1)">--><img src="images/nav-team1.png" alt="training team" name="team" width="270" height="25" class="navbuttons" border="0"></a><br />
<a href="lms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('lms','','images/nav-lms2.png',1)"><img src="images/nav-lms1.png" alt="the LMS" name="lms" width="270" height="25" class="navbuttons" border="0"></a><br />
<a href="live.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('live','','images/nav-live2.png',1)"><img src="images/nav-live1.png" alt="live training" name="live" width="270" height="25" class="navbuttons" border="0"></a><br />
<a href="ideas.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ideas','','images/nav-ideas2.png',1)"><img src="images/nav-ideas1.png" alt="training ideas" name="ideas" width="270" height="24" class="navbuttons" border="0"></a><br />
<a href="materials.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('materials','','images/nav-materials2.png',1)"><img src="images/nav-materials1.png" alt="training materials" name="materials" class="navbuttons" width="270" height="26" border="0"></a><br />
<IMG SRC="images/leftside1.gif" WIDTH=270 HEIGHT=149 BORDER=0 ></td>
</tr>
</table>
</div>
   		<div id="content">
		<IMG SRC="images/top.png" WIDTH=716 HEIGHT=78><br/>
<IMG SRC="images/subheader-<?php echo($header) ?>.png" WIDTH="716" HEIGHT="25">
<div id="innercontent">