<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.a1
{
	width:40%;
	margin-top:70px;
}
.a3{
	width:20%;
	margin-top:50px;
}
.btn {
  border: 2px solid;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size:23px;
  cursor: pointer;
  border-radius:10px;
  margin-top:70px;
}
.a2 {
  border-color:black;
  color: black;
}

.a2:hover {
  background:black;
  color: white;
}

</style>
<body>
<form method="POST" enctype="multipart/form-data">
<center>
<div class="a3">
<label style="margin-top:30px;font-family:BankFuturistic;font-size:30px;font-weight:900;">File Name</label><br><br><br><br>
<input class="w3-input" type="text" name="filename" id="filename" required></p></div>
<div class="a1">
<p><label style="margin-top:30px;font-family:BankFuturistic;font-size:30px;font-weight:900;">Word to be searched</label><br><br>
   <input class="w3-input" type="text" name="searchword" id="searchword" required></p></div>
   <button name="submit" class="btn a2">Search</button>
   </center>
</form>
 </body>
</html>
<?php
if(isset($_POST['submit']))
{
	$con=mysqli_connect("localhost","root","") or die("can not connect");
	if(!mysqli_select_db($con,"u16co023"))
	{
		mysqli_query($con,"CREATE DATABASE u16co023");
		mysqli_select_db($con,"u16co023");
	}
	$filename=$_POST['filename'];	
	$result1=mysqli_query($con,"SELECT * FROM filedata WHERE name='$filename'");
	$no=mysqli_num_rows($result1);
	if($no)
	{
		$searchword=$_POST['searchword'];
	$data=mysqli_fetch_row(mysqli_query($con,"SELECT `data` from `filedata` WHERE name='$filename'"));
	//$data=nl2br($data[0]);
	$offset=strpos($data[0],$searchword);
	if($offset !== false){
		echo "<script>alert('offset: $offset');location='tmp.php';</script>";
	}
	else{
		echo "<script>alert('\'$searchword\' not present in file \'$filename\'');location='tmp.php';</script>";
		
	}
	}
	else
	{
			echo "<script>alert('No file is present with name \'$filename\'');location='search.php';</script>";
	}
		
}




?>