<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
    header("Content-Type: application/vnd.ms-excel"); // แล้วนี่ก็ชื่อไฟล์
    header('Content-Disposition: attachment;filename= "sample.xls"'); // แล้วนี่ก็ชื่อไฟล์
  ?>
  <body>
    <?php
    function fetch_data()  {
      $output = '';
      $connect = mysqli_connect("localhost", "root", "", "dreamhome");
      $sql = "select type, avg(rent) from propertyforrent group by type;";
      $result = mysqli_query($connect, $sql);
      while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
    				<td><?php echo $row["type"]; ?></td>
    				<td><?php echo $row["avg(rent)"]; ?></td>
    			</tr>
    <?php  }

    }
?>
    <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3>
    <table border="1" cellspacing="0">
  	   <tr>
  			<th width="50%" align="center">type</th>
  			<th width="50%" align="center">avg(rent)</th>
  	   </tr>
    <?php fetch_data(); ?>
    </table>
  </body>
</html>
