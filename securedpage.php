<?php
// Inialize session
session_start();
// Check if username session is not set 
if(!isset($_SESSION['username'])) {	
	header('Location: index.php');
}
?>

<?php $dbcnx=@mysql_connect("mysql.cs.orst.edu","cs275_jonesry","9285");

if(!$dbcnx){
	echo 'Connection failure!';
	exit();
}
?>


<?php $pagetitle="Payment Records";?>
<?php include "../header.htm";?>
<?php $dbcnx=@mysql_connect("mysql.cs.orst.edu","cs275_jonesry","9285");

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
?>



<table>
	<h1>Payments List</h1>
	<tr>
		<th>Name</th>
		<th>Date Paid</th>
		<th>For What</th>
		<th>Amount Paid</th>
	</tr>
	<?php while($row=mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["payment_time"]."</td>";
		echo "<td>".$row["for_what"]."</td>";
		echo "<td>".$row["amount_paid"]."</td>";
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


<fieldset>
	<h1>Enter information here to update the records (incase a mistake was made on a first submission): </h1>
	<form action="update.php" method="post">
	Name: <input type="text" name="name" autofocus required><br>
	Date Paid: <input type="text" name="payment_time"><br>
	For What?: <input type="text" name="for_what"><br>
	Amount Paid: <input type="text" name="amount_paid">
	<label for="send"></label>
	<input type="submit" id="send" name="Submit" value="Submit">
</form>
</fieldset>


<?php include "../../footer.htm"; ?>
