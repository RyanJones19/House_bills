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
 
$sql="INSERT INTO Payments (name, payment_time, for_what, amount_paid)
VALUES
('$_POST[name]','$_POST[payment_time]', '$_POST[for_what]', '$_POST[amount_paid]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

 
mysql_close($con);
?>
    </body>
</html>
