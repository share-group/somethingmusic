<?php
session_start();
include "config.php";//载入系统配置文件
$action=$_POST['action'];
if(!isset($action))
{
	header("location:index.php");
}
else
{
	$id=$_POST['id'];
	$type=$_POST['type'];
	if($type=='true')
	{
		set_true($conn,$id,$action);
	}
	else
	{
		set_false($conn,$id,$action);
	}
}
?>