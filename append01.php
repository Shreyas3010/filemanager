<?php 
	session_start();
?>
<html>
<style>
.a1 {
    width:1200px;
	height:400px;
    border: 2px solid #CCCC00;
    padding: 25px;
    margin-top:70px;
}
.b1
{
	height:100%;
	width:100%;
	border:none;
	font-size:30px;
}
.btn {
  border: 2px solid #CCCC00;
  background-color: white;
  color: #CCCC00;
  padding: 14px 28px;
  font-size:23px;
  cursor: pointer;
  border-radius:10px;
  margin-top:110px;
}
.a2 {
  border-color:#CCCC00;
  color:#CCCC00;
}

.a2:hover {
  background:#CCCC00;
  color: white;
}
</style>
<body>
<?php
$con=mysqli_connect("localhost","root","")or die("can not connect");
if(!mysqli_select_db($con,"u16co023"))
{
	mysqli_query($con,"CREATE DATABASE u16co023");
	mysqli_select_db($con,"u16co023");
}
		$filename=$_POST['filename'];
		$_SESSION['filename']=$filename;
		$result=mysqli_query($con,"SELECT data FROM filedata WHERE name='$filename'");
		$no=mysqli_num_rows($result);
		if($no==0)
		{
			
			echo "<script>alert('File with name \'$filename\' is not present.');location='append.php';</script>";
		}
		
?>
		<form action = "append011.php" method="post" enctype="multipart/form-data" >
		<center><div style="margin-top:100px;"><font style="font-size:45px;color:#CCCC00;"><?php echo $filename; ?></font></div>
		<div class="a1"><textarea class="b1" name="appenddata"></textarea></div>
		<button name="submit" class="btn a2">Append</button>
		</center></form>
</body>
</html>