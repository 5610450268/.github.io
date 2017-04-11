<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table Data Lab03</title>
<script src="myScript.js"></script>
</head>

<body onload="checkCookie()">
	<table width="500" border="1">
	<?php 
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$houseNumber = $_GET['houseNumber'];
		$street = $_GET['street'];
		$city = $_GET['city'];
		$province = $_GET['province'];
		$zipcode = $_GET['zipcode'];
		$phone = $_GET['phone'];
		$cellPhone = $_GET['cellPhone'];
		$birthday = $_GET['birthday'];
		$citizenship = $_GET['citizenship'];
		$zodiacSign = $_GET['zodiacSign'];
		$zodiacYear = $_GET['zodiacYear'];
		$bdWeek = $_GET['bdWeek'];
	?>
	<tr>
		<th colspan="3" scope="row">Profile</th>
    </tr>
    <tr>
        <th colspan="2" scope="row">Firstname</th>
        <td width="96"><?php echo firstname;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Lastname</th>
        <td><?php echo lastname;?></td>
    </tr>
    <tr>
        <th width="177" rowspan="5" scope="row">Address</th>
        <td width="205"><div align="center">House number</div></td>
        <td><?php echo houseNumber;?></td>
    </tr>
    <tr>
        <td><div align="center">Street</div></td>
        <td><?php echo street;?></td>
    </tr>
    <tr>
        <td><div align="center">City</div></td>
        <td><?php echo city;?></td>
    </tr>
    <tr>
        <td><div align="center">Province</div></td>
        <td><?php echo province;?></td>
    </tr>
    <tr>
        <td><div align="center">Zipcode</div></td>
        <td><?php echo zipcode;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Phone number</th>
        <td><?php echo phone;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Cell phone number</th>
        <td><?php echo cellPhone;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Birthday</th>
        <td><?php echo birthday;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Citizenship number</th>
        <td><?php echo citizenship;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Zodiac Sign</th>
        <td><?php echo zodiacSign;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Zodiac Year</th>
        <td><?php echo zodiacYear;?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Birth Day of Week</th>
        <td><?php echo bdWeek;?></td>
    </tr>
	</table>
</body>
</html>
