<html>
<body>
<?php

$con = mysql_connect("mysql.cs.orst.edu","cs275_jonesry","9285");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("cs275_jonesry", $con);

if(!isset($_POST['search'])){
	header("Location:index.php");	
}

$search_sql="SELECT * FROM Payments WHERE name LIKE '%".$_POST['search']."%'";
$search_query=mysql_query($search_sql);
$search_rs=mysql_fetch_assoc($search_query);


                                                        


if(mysql_num_rows($search_query)!=0){ 
	do{ ?>
	<h3>The payment history of the searched person is as follows:</h3>
	<p> Name: <?php echo $search_rs['name']; ?></p>
	<p> Dates Paid: <?php echo $search_rs['payment_time']; ?></p>
	<p> For What?:<?php echo $search_rs['for_what']; ?></p>
	<p> Amount Paid: <?php echo $search_rs['amount_paid']; ?></p>
	
<?php	}while($search_rs=mysql_fetch_assoc($search_query));
}
else{
	echo "No results found";
}
?>
</body>
</html>
<a href="index.php">Click Here to Go Back to Enter a different name</a>
