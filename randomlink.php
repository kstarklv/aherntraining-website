<?php

$option = "banner";

$sites[0] = array("http://www.ahern.com", "Main Ahern Site", 1, "banners/ahern.jpg");
$sites[1] = array("http://www.xtrememanufacturing.com", "Xtreme Manufacturing", 1, "banners/xtreme.jpg");
$sites[2] = array("http://vr.ahern.com", "Video Review", 1, "banners/vr.jpg");
$sites[3] = array("http://wr.ahern.com", "Web Review", 1, "banners/wr.jpg");
$sites[4] = array("http://bookforum.ahern.com", "Ahern Book Forum", 1, "banners/bookforum.jpg");
$sites[5] = array("http://www.aherntraining.com/ideas.php", "Need a Form?", 1, "banners/form.jpg");
$sites[6] = array("training_safety.php", "Safety Training", 1, "banners/safety.jpg");

$countsites = count($sites);

for($i=0; $i<$countsites; $i++)
	{
	for($x=0; $x<$sites[$i][2]; $x++)
		{
		if($option != null)
			{
			$mylist[] = array($sites[$i][0],$sites[$i][1],$sites[$i][3]);
			}
		else
			{
			echo("Error deciding option.");
			exit();
			}
		}
	}

$countlist = count($mylist);

$countlist = $countlist - 1;

$picker = rand(0, $countlist);

if($option == "link")
	{
	echo("<a href='" . $mylist[$picker][0] . "'>" . $mylist[$picker][1] . "</a>");
	}

else if($option == "banner")
	{
	echo("<a href='" . $mylist[$picker][0] . "'target='blank'><img alt='" . $mylist[$picker][1] . "' src='" . $mylist[$picker][2] . "'class='banner'></a>");
	}

else
	{
	echo("Error deciding option.");
	exit();
	}

?>