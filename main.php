<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
    border: none;
    background-color: inherit;
    padding: 14px 28px;
    font-size: 25px;
    cursor: pointer;
    display: inline-block;
	margin-top:70px;
	
}

.btn:hover {
	background: #eee;
	}

.a1 {
	color: green;
	}
.a2 {
	color: dodgerblue;
	margin-left:100px;
	}
.a3 {
	color: orange;
    margin-left:100px;
	}
.a4 {
	color: red;
	margin-left:100px;
	}
.a5 {
	color:black;
	margin-left:100px;
	}
.a6 {
	color:#CCCC00;
	margin-left:100px;
	}
</style>
</head>
<body>
<center>
<div style="margin-top:70px;">
<a href="tmp.php" target="target" style="text-decoration: none;font-size:40px;cursor:grab;color:black;">File Handling</a>
<br>
<div>
<a target="target" href="upload.php"><button class="btn a1" >Upload</button></a>
<a target="target" href="edit.php"><button class="btn a2" target="target" >Edit</button></a>
<a target="target" href="delete.php"><button class="btn a3" target="target" >Delete</button></a>
<a target="target" href="view.php"><button class="btn a4" target="target" >View</button></a>
<a target="target" href="search.php"><button class="btn a5" target="target" >Search</button></a>
<a target="target" href="append.php"><button class="btn a6" target="target" >Append</button></a>
<div></center>
<div><iframe  style="border:none;" src="tmp.php" width="100%" height="900px"  name="target"></iframe>
</div>
</body>
</html>
