<html>
<head>
<title>Register</title>
</head>
<body>
<fieldset style="width: 300px;height: 370px; background-color: gray;margin-top: 40px;"><form action="insert.php" method="POST" style="margin-top: 50px; background-color: khaki; height: 360px;margin-top: 10px; border-radius: 5px 5px 5px 5px;" ><br/>
Studentid:
&nbsp&nbsp<input type="text"name="s_id"><br/><br/>
fname:
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"name="fname"required><br/><br/>
lname:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"name="lname"><br/><br/>
<input type="submit"name="insert"value="insert" style="text-align: center;margin-left: 80px;">
<h2><a href="select.php">view here</a></h2>
</form>

</fieldset>
<?php
$host="localhost";
$user="root";
$pwd="";
$database="school";
$connect=mysqli_connect($host,$user,$pwd,$database);
if ($connect) {
//echo "ouer database succed";
}
else{
	echo "noy yet";
}
?>
<?php
if(isset($_POST['insert'])){
	$Studentid=$_POST['s_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$insert="INSERT INTO student(s_id,fname,lname) values('$Studentid','$fname','$lname')";
	$runinsert=mysqli_query($connect,$insert);
	if ($runinsert) {
		//echo "data inserted";
			$_SESSION['message'] = "Address saved";
	}
	else{
		echo "not yet inserted";
	}
}

?>
</body>
</html>