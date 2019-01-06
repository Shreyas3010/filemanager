<?php 
	session_start();
?>
<html>
<style>
.a1 {
    width:1200px;
    border: 2px solid red;
    padding: 25px;
    margin-top:70px;
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
//echo "1";
//echo $_POST['fID'];
	if(isset($_POST['fID']))
	{
		$j=$_POST['fID'];
		$d="data".$j;
		//echo $d;
		$data=$_SESSION["$d"];
		//echo $data;
		$j1="name".$j;
		$name=$_SESSION["$j1"];
		//echo $name;
		?>
		<center><div style="margin-top:100px;"><font style="font-size:45px;color:red;"><?php echo $name; ?></font></div>
		<div class="a1"><p style="font-size:30px;"><?php echo $data;?><p></div>
		
		</center>
<?php	}
		else
		{
			echo '<script>alert("Please select a file.");location="view.php";</script>';
		}
					

?>
</body>
</html>