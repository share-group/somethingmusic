<?php
session_start();
set_time_limit(0);
include "config.php";
$login=$_SESSION['login'];
if($login=="")
{
	header("location:index.php");
}
else
{
	//ר��
	$sql='select picture from somethingmusic_album order by id desc';
	$pic=get_my_array($conn,$sql);
	foreach ($pic as $p)
	{
		echo "<img src='".BASE_URL.'thumbs/?thumb=admin/'.$p[0]."&w=190&h=190&q=75' width='190' height='190'/></br>";
		echo "<img src='".BASE_URL.'thumbs/?thumb=admin/'.$p[0]."&w=170&h=170&q=15' width='190' height='190'/></br>";
	}
	
	//������
	$sql='select pic from somethingmusic_artist order by id desc';
	$pic=get_my_array($conn,$sql);
    foreach ($pic as $p)
	{
		echo "<img src='".BASE_URL.'thumbs/?thumb=admin/'.$p[0]."&w=184&h=184&q=30' width='190' height='190'/></br>";
	}
}
?>