<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab6-1-5610450268</title>
</head>
<body>
<form action="" method="post">
    customerID:<input name="customerID" /><br />
    citizenID:<input name="citizenID" /><br />
	firstname:<input name="fname" /><br />
    lastname:<input name="lname" /><br />
    <input name="submit" type="submit" />
</form>
<?php
if(isset($_POST['submit'])){
  $customerID = $_POST['customerID'];
  $citizenID = $_POST['citizenID'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "webtech";
  
  try {
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "insert into customers (customerID, citizenID, fname, lname) 
  values ('$customerID','$citizenID','$fname','$lname');";
	  // use exec() because no results are returned
	  $conn->exec($sql);
	  echo "New record created successfully";
	  }
  catch(PDOException $e)
	  {
	  echo $sql . "<br>" . $e->getMessage();
	  }
  
  $conn = null;
}
?>
</body>
</html>