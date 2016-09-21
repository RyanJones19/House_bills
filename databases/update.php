<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http://people.oregonstate.edu/~jonesry/house_bills/databases/index.php">
        <script type="text/javascript">
            window.location.href = "http://people.oregonstate.edu/~jonesry/house_bills/databases/index.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='http://people.oregonstate.edu/~jonesry/cs275/play_call/index.php'>link to example</a>

<?php
$con = mysql_connect("mysql.cs.orst.edu","cs275_jonesry","9285");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("cs275_jonesry", $con);

if($_POST['payment_time'] != NULL){
	$sql="UPDATE Payments SET payment_time='$_POST[payment_time]' WHERE name like '$_POST[name]'";
	mysql_query($sql);
}

if($_POST['for_what'] != NULL){
	$sql="UPDATE Payments SET for_what='$_POST[for_what]' WHERE name like '$_POST[name]'";
	mysql_query($sql);
}

if($_POST['amount_paid'] != NULL){
	$sql="UPDATE Payments SET amount_paid='$_POST[amount_paid]' WHERE name like '$_POST[name]'";
	mysql_query($sql);

}
  
 
//$sql="UPDATE Player SET number='$_POST[number]',height='$_POST[height]',weight='$_POST[weight]'WHERE name='$_POST[name]'";

echo "Record Updated";

 
mysql_close($con);

?>

    </body>
</html>
