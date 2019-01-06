<?php
session_start();
$con=mysqli_connect("localhost","root","") or die("cannot connect...");
	if(!mysqli_select_db($con,"u16co023")){
		mysqli_query($con,"CREATE DATABASE u16co023");
		mysqli_select_db($con,"u16co023");
	}
	$editdata=$_POST['editdata'];
	$filename=$_SESSION['filename'];
	echo $filename;
	$qry="UPDATE filedata SET data='$editdata' WHERE name='$filename'";
	//echo  $qry;
	mysqli_query($con,$qry);
	echo "<script>alert('File updated successfully.');location='tmp.php';</script>";
?>