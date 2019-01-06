<html>
<style>
::placeholder {
    color: orange; 
}
.b{
  margin-top:120px;
  width: 30%;
  padding: 20px;
  border:1px solid orange;
  font-family: "Roboto";  
  font-size:20px;
  }
  .b:hover{
	  border:2px solid orange;
	  
  }
.btn {
  border: 2px solid;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size:23px;
  cursor: pointer;
  border-radius:10px;
  margin-top:110px;
}
.a1 {
  border-color:orange;
  color: orange;
}

.a1:hover {
  background:orange;
  color: white;
}

</style>
<body>
<center><form method='POST' enctype="multipart/form-data">
<input type="text" name="filename" class="b" placeholder="File Name" required ><br>
<button name="submit" class="btn a1">Delete</button>
</form>
</center>
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
	echo $filename;
	mysqli_query($con,"DELETE FROM filedata WHERE name='$filename'");
	echo "<script>alert('File \'$filename\' is deleted successfully.');location='tmp.php';</script>";
}

?>
