<?php
function fetch_data()  {
  $output = '';
  $connect = mysqli_connect("localhost", "root", "", "dreamhome");
  $sql = "select type, avg(rent) from propertyforrent group by type;";
  $result = mysqli_query($connect, $sql);
  while($row = mysqli_fetch_array($result)){
  $output .= '<tr>
				<td>'.$row["type"].'</td>
				<td>'.$row["avg(rent)"].'</td>
			</tr>';
  }
  return $output;
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Lab07-5610450268</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
	float:right;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<body>
   <br /><br />
   <div class="container" style="width:700px;">
		<h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br />
		<div class="table-responsive">
			<div class="dropdown">
				<button class="dropbtn">SAVE File</button>
				<div class="dropdown-content">
					<a href="pdffile.php">PDF file</a>
          <a href="excelfile.php">EXCEL file</a>
				</div>
			</div>
			<br/>
			<table class="table table-bordered" align="center">
				 <tr>
					  <th width="20%">type</th>
					  <th width="30%">avg(rent)</th>
				 </tr>
				<?php
					echo fetch_data();
				?>
				</table>
			<br />
		</div>
   </div>
</body>
</html>
