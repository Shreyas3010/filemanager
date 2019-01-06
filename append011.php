<?php
session_start();
$con=mysqli_connect("localhost","root","") or die("cannot connect...");
	if(!mysqli_select_db($con,"u16co023")){
		mysqli_query($con,"CREATE DATABASE u16co023");
		mysqli_select_db($con,"u16co023");
	}
	$appenddata=$_POST['appenddata'];
	$filename=$_SESSION['filename'];
	//echo $filename;
	$result=mysqli_query($con,"SELECT data FROM filedata WHERE name='$filename'");
	$row=mysqli_fetch_array($result);
	$data=$row['data'];
	$newdata=$data.$appenddata;
	$qry="UPDATE filedata SET data='$newdata' WHERE name='$filename'";
	//echo  $qry;
	mysqli_query($con,$qry);
	echo "<script>alert('File updated successfully.');location='tmp.php';</script>";
?>