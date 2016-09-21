<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http://people.oregonstate.edu/~jonesry/house_bills/index.php">
        <script type="text/javascript">
            window.location.href = "http://people.oregonstate.edu/~jonesry/house_bills/index.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>

<?php
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'jonesry-db';
$dbuser = 'jonesry-db';
$dbpass = 'x2g8SYgfn5XTTF3G';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

echo 'Successfully connected to database!';


$sql="INSERT INTO house_bills (payee_name,amount_paid,for_what)
VALUES
('$_POST[payee_name]', '$_POST[amount_paid]', '$_POST[for_what]')"; 
 
mysql_query($sql);
 
mysql_close($mysql_handle);
?>
    </body>
</html>
