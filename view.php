<html>
<style>
.container {

    position: relative;
    padding-left:50px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color:#ff4d4d;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.btn {
  border: 2px solid red;
  background-color: white;
  color: red;
  padding: 14px 28px;
  font-size:23px;
  cursor: pointer;
  border-radius:10px;
  margin-top:110px;
}
.a1 {
  border-color:red;
  color:red;
}

.a1:hover {
  background:red;
  color: white;
}
</style>
<body>
<center>
<div style="margin-top:70px;"><font style="font-size:35px;color:red;">List  Of  Files</font></div>
<form action = "view01.php" method="post" enctype="multipart/form-data" >
<?php
	$con=mysqli_connect("localhost","root","")or die("can not connect");
	if(!mysqli_select_db($con,"u16co023"))
	{
		mysqli_query($con,"CREATE DATABASE u16co023");
		mysqli_select_db($con,"u16co023");
	}
	session_start();
	$j=0;
	$result=mysqli_query($con,"SELECT * FROM `filedata` WHERE 1");
	$no=mysqli_num_rows($result);
	//echo $no;
	while($row=mysqli_fetch_array($result))
	{
		$j0="file".$j;
		$_SESSION["$j0"]=$row['fileID'];
		$j1="name".$j;
		$_SESSION["$j1"]=$row['name'];
		$j2="data".$j;
		$_SESSION["$j2"]=$row['data'];
		//echo $j;
		//echo $row['fileID'];
?>
<br>
		<div style="margin-top:30px;">
		<label class="container">
		<input type="radio" id="<?php echo "$j"?>" value="<?php echo "$j"?>" name="fID">
		<span class="checkmark"></span><?php echo $row['name'];?>
		</label>
		</div>
<?php		
	$j++;
	}
	
?>
<button name="submit" class="btn a1">View</button>
</center>
</form>
</body>
</html>