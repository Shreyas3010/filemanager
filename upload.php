<html>
<style>
::placeholder {
    color: green;
 
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  margin-top:70px;
  }

.bt {
  color:green;
  background-color: white;
  padding: 8px 20px;
  font-size:25px;
  font-family:Roboto;
  width:495px;
  height:60px;
  margin-left:1px;
  border:none;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.b{
  margin-top:70px;
  width: 30%;
  padding: 20px;
  border:1px solid green;
  font-family: "Roboto";  
  font-size:20px;
  }
  .b:hover{
	  border:2px solid green;
	  
  }
.btn {
  border: 2px solid;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size:23px;
  cursor: pointer;
  border-radius:10px;
  margin-top:100px;
}
.a1 {
  border-color:green;
  color: green;
}

.a1:hover {
  background:green;
  color: white;
}

</style>
<body>
<center><form method='POST' enctype="multipart/form-data">
<div class="upload-btn-wrapper">
  <button class="bt">Upload File</button>
  <input type='file' name='uploadfile' accept='.txt'//>
</div><br>
<input type="text" name="saveas" class="b" placeholder="Save as" required ><br>
<button name="submit" class="btn a1">Upload</button>
</form>
</center>
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","") or die("cannot connect...");
	if(!mysqli_select_db($con,"u16co023")){
		mysqli_query($con,"CREATE DATABASE u16co023");
		mysqli_select_db($con,"u16co023");
	}

	$filename=$_POST['saveas'];
	echo $filename;
	$filecontents=file_get_contents($_FILES['uploadfile']['name']);
	$qry="INSERT INTO `filedata`(`name`,`data`) VALUES('$filename','$filecontents')";
	//echo  $qry;
	if(!mysqli_query($con,$qry)){
		mysqli_query($con,"CREATE TABLE `filedata`(fileID BIGINT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), data LONGTEXT)");
		mysqli_query($con,$qry);
	}
	echo "<script>alert('File uploaded successfully.');location='tmp.php';</script>";
}
?>