<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab05-5610450268  คำขวัญจังหวัด</title>
<?php 
	$birthday = $_POST["birthday"];
	$year = explode("-", $birthday);
	$currentYear = date("Y");
	if($currentYear-$year[0] < 13){
		$image = "child.jpg";
	}
	else if(isset($_POST["gender"])){
		$gender = $_POST["gender"];
		if($gender == "male"){
			$image = "boy.jpg";
		}else if($gender == "female"){
			$image = "girl.jpg";
		}
	}
	if(isset($_POST["province"])){
		$province = $_POST["province"];
		$myfile = "motto/".$province.".txt";
		$tis620 = iconv("utf-8", "tis-620", $myfile);
	}
?>
<style>
body{
	background:url(<?php echo $image; ?>);
}
#pageProvince{
	width:500px;
	margin-top:40px;
	margin-left:auto;
	margin-right:auto;
	padding-top:20px;
	background-color:rgba(255,255,255, 0.7);
}
#imageShow{
	background:url(<?php echo "sign/".$province.".png"; ?>);
	width:300px;
	height:300px;
	margin-left:auto;
	margin-right:auto;
}
#textShow{
	margin-left:auto;
	margin-right:auto;
	padding:20px;
}
</style>
</head>
<body>
	<div id="pageProvince">
		<p id="imageShow"></p>
		<p id="textShow"><?php readfile($tis620); ?></p>
	</div>
</body>
</html>
