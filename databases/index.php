<?php $pagetitle="Payment Records";?>
<?php include "../header.htm";?>
<?php /*$dbcnx=@mysql_connect("oniddb.cws.oregonstate.edu","jonesry-db"","9285");

if(!$dbcnx){
	echo 'Connection failure!';
	exit();
}
?>

<?php $db=mysql_select_db("cs275_jonesry",$dbcnx);

if(!$db){
	echo 'Database failure!';	
}
?>


<?php $db=mysql_select_db("cs275_jonesry",$dbcnx);

if(!$db){
	echo 'Database failure!';	
}

$query='SELECT * FROM Payments';
$result=mysql_query($query);

if(!$result){
	die('Fatal error(s): '.mysql_error());	
}
?>*/

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'jonesry-db';
$dbuser = 'jonesry-db';
$dbpass = 'x2g8SYgfn5XTTF3G';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

echo 'Successfully connected to database!';

$query='SELECT * FROM house_bills';
$result=mysql_query($query);

<table>
	<h1>Payments List</h1>
	<tr>
		<th>Name</th>
		<th>Date Paid</th>
		<th>Snapshot_to_date</th>
		<th>Amount Paid</th>
		<th>For What?</th>
	</tr>
	<?php while($row=mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$row["payee_name"]."</td>";
		echo "<td>".$row["paid_date"]."</td>";
		echo "<td>".$row["snapshot_to_date"]."</td>";
		echo "<td>".$row["amount_paid"]."</td>";
		echo "<td>".$row["for_what"]."</td>";
		echo "</tr>";
		
	}
	?>
		

</table>




<fieldset>
	<h1>Enter information here to insert a new record of payment into the database: </h1>
	<form action="insert.php" method="post">
	Name: <input type="text" name="name" autofocus><br>
	Date Paid: <input type="text" name="payment_time"><br>
	For what?: <input type="text" name="for_what"><br>
	Amount Paid: <input type="text" name="amount_paid">
	<input type="submit">
</form>
</fieldset>


<?php include "../footer.htm";?>
