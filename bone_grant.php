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

//if(!isset($_POST['run'])){
	//header("Location:calculation.php");	
//}

//$sql="SELECT * FROM house_bills"; 
//$result=mysql_query($sql); 
//$result_fm=mysql_fetch_assoc($result);

/*$ryan="SELECT * FROM house_bills WHERE payee_name = 'Ryan'";
$ryan_result=mysql_query($ryan);

while($row=mysql_fetch_array($ryan_result)){
  		$ryan_send="Name: ".$row["payee_name"]." Paid Date: ".$row["paid_date"]." Snapshot to Date: ".$row["snapshot_to_date"]." Amount Paid: ".$row["amount_paid"]." For What: ".$row["for_what"];
  		var_dump(mail( '5415105250@vtext.com', '', $ryan_send ));
};

$evan="SELECT * FROM house_bills WHERE payee_name = 'Evan'";
$evan_result=mysql_query($evan);

while($row=mysql_fetch_array($evan_result)){
  		$evan_send="Name: ".$row["payee_name"]." Paid Date: ".$row["paid_date"]." Snapshot to Date: ".$row["snapshot_to_date"]." Amount Paid: ".$row["amount_paid"]." For What: ".$row["for_what"];
      var_dump(mail( '5038882587@vtext.com', '', $evan_send ));
};

$sean="SELECT * FROM house_bills WHERE payee_name = 'Sean'";
$sean_result=mysql_query($sean);

while($row=mysql_fetch_array($sean_result)){
  		$sean_send="Name: ".$row["payee_name"]." Paid Date: ".$row["paid_date"]." Snapshot to Date: ".$row["snapshot_to_date"]." Amount Paid: ".$row["amount_paid"]." For What: ".$row["for_what"];
      var_dump(mail( '5036809957@vtext.com', '', $sean_send ));
};
*/
$grant="SELECT * FROM house_bills WHERE payee_name = 'Grant'";
$grant_result=mysql_query($grant);

while($row=mysql_fetch_array($grant_result)){
  		$grant_send="Name: ".$row["payee_name"]." Paid Date: ".$row["paid_date"]." Snapshot to Date: ".$row["snapshot_to_date"]." Amount Paid: ".$row["amount_paid"]." For What: ".$row["for_what"];
      var_dump(mail( '9717207058@tmomail.com', '', $grant_send ));
};

$bunch_of_stuff = "^ - Courtesy of 335";

for ($i = 1; $i <= 100; $i++) {
    var_dump(mail( '5038674979@messaging.sprintpcs.com','', $bunch_of_stuff));
}



?>
</body>
</html>
