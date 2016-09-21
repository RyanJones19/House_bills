<html>
<?php
$con = mysql_connect("mysql.cs.orst.edu","cs275_jonesry","9285");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("cs275_jonesry", $con);
 
$sql="INSERT INTO users (username, password)
VALUES
('$_POST[username]',MD5('$_POST[password]'))";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

 
mysql_close($con);
?>
<br>
<br>
<a href="index.php">Click Here to Go Back and Login</a>
</html>
