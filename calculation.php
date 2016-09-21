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


$monthly_sum="SELECT sum(amount_paid) FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00'";
$monthly_sum_result=mysql_query($monthly_sum);
while($row=mysql_fetch_array($monthly_sum_result)){
  		$send_sum="Total Amount Paid this Month: ".$row["sum(amount_paid)"];
};

$monthly_split="SELECT (sum(amount_paid)/5) AS split_amount FROM house_bills WHERE snapshot_to_date =  '0000-00-00 00:00:00'";
$monthly_split_result=mysql_query($monthly_split);
while($row=mysql_fetch_array($monthly_split_result)){
      $send_split=" --- Split Amount: ".$row["split_amount"];
};

// SEND TO RYAN

$ryan_paid="SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Ryan'";
$ryan_paid_result=mysql_query($ryan_paid);
while($row=mysql_fetch_array($ryan_paid_result)){
      $send_ind_amount=" --- You paid: ".$row["ind_amount"];
};

$ryan_owed="SELECT ((SELECT (sum(amount_paid)/5) AS split_amount FROM house_bills WHERE snapshot_to_date =  '0000-00-00 00:00:00')-(SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Ryan')) AS amount_owed";
$ryan_owed_result=mysql_query($ryan_owed);
while($row=mysql_fetch_array($ryan_owed_result)){
      $send_owed_amount=" --- You owe: ".$row["amount_owed"];
      $ryan_owed_amount=$row["amount_owed"];
};

$ryan_send=$send_sum.$send_split.$send_ind_amount.$send_owed_amount;
//var_dump(mail( '5415105250@vtext.com', '', $ryan_send ));

// SEND TO EVAN

$evan_paid="SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Evan'";
$evan_paid_result=mysql_query($evan_paid);
while($row=mysql_fetch_array($evan_paid_result)){
      $send_ind_amount=" --- You paid: ".$row["ind_amount"];
};

$evan_owed="SELECT ((SELECT (sum(amount_paid)/5) AS split_amount FROM house_bills WHERE snapshot_to_date =  '0000-00-00 00:00:00')-(SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Evan')) AS amount_owed";
$evan_owed_result=mysql_query($evan_owed);
while($row=mysql_fetch_array($evan_owed_result)){
      $send_owed_amount=" --- You owe: ".$row["amount_owed"];
      $evan_owed_amount=$row["amount_owed"];
};

$evan_send=$send_sum.$send_split.$send_ind_amount.$send_owed_amount;
//var_dump(mail( '5038882587@vtext.com', '', $evan_send ));

// SEND TO SEAN


$sean_paid="SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Sean'";
$sean_paid_result=mysql_query($sean_paid);
while($row=mysql_fetch_array($sean_paid_result)){
      $send_ind_amount=" --- You paid: ".$row["ind_amount"];
};

$sean_owed="SELECT ((SELECT (sum(amount_paid)/5) AS split_amount FROM house_bills WHERE snapshot_to_date =  '0000-00-00 00:00:00')-(SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Sean')) AS amount_owed";
$sean_owed_result=mysql_query($sean_owed);
while($row=mysql_fetch_array($sean_owed_result)){
      $send_owed_amount=" --- You owe: ".$row["amount_owed"];
      $sean_owed_amount=$row["amount_owed"];
};

$sean_send=$send_sum.$send_split.$send_ind_amount.$send_owed_amount;
//var_dump(mail( '5036809957@vtext.com', '', $sean_send ));

// SEND TO GRANT


$grant_paid="SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Grant'";
$grant_paid_result=mysql_query($grant_paid);
while($row=mysql_fetch_array($grant_paid_result)){
      $send_ind_amount=" ---You paid: ".$row["ind_amount"];
};

$grant_owed="SELECT ((SELECT (sum(amount_paid)/5) AS split_amount FROM house_bills WHERE snapshot_to_date =  '0000-00-00 00:00:00')-(SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Grant')) AS amount_owed";
$grant_owed_result=mysql_query($grant_owed);
while($row=mysql_fetch_array($grant_owed_result)){
      $send_owed_amount=" --- You owe: ".$row["amount_owed"];
      $grant_owed_amount=$row["amount_owed"];
};

$grant_send=$send_sum.$send_split.$send_ind_amount.$send_owed_amount;
//var_dump(mail( '5039546367@txt.att.net', '', $grant_send ));

// SEND TO RILEY
$riley_paid="SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Riley'";
$riley_paid_result=mysql_query($riley_paid);
while($row=mysql_fetch_array($riley_paid_result)){
      $send_ind_amount=" --- You paid: ".$row["ind_amount"];
};

$riley_owed="SELECT ((SELECT (sum(amount_paid)/5) AS split_amount FROM house_bills WHERE snapshot_to_date =  '0000-00-00 00:00:00')-(SELECT sum(amount_paid) AS ind_amount FROM house_bills WHERE snapshot_to_date = '0000-00-00 00:00:00' AND payee_name = 'Riley')) AS amount_owed";
$riley_owed_result=mysql_query($riley_owed);
while($row=mysql_fetch_array($riley_owed_result)){
      $send_owed_amount=" ---  You owe: ".$row["amount_owed"];
      $riley_owed_amount=$row["amount_owed"];
};

$riley_send=$send_sum.$send_split.$send_ind_amount.$send_owed_amount;
//var_dump(mail( '5033140888@vtext.com', '', $riley_send ));


/*$array = array(
      array($ryan_owed_amount,"Ryan"),
      array($evan_owed_amount,"Evan"),
      array($sean_owed_amount,"Sean"),
      array($grant_owed_amount,"Grant")
      );*/
      
$array =  array(
  "Ryan" => $ryan_owed_amount,
  "Evan" => $evan_owed_amount,
  "Sean" => $sean_owed_amount,
  "Grant" => $grant_owed_amount,
  "Riley" => $riley_owed_amount
  );

//var_dump(mail( '5415105250@vtext.com', '',$ryan_owed_amount.$evan_owed_amount.$sean_owed_amount.$grant_owed_amount.$riley_owed_amount)); 

$payment_split="";

while(count($array)!=0 and count($array)!=1){
  $max_key=array_keys($array,max($array));
  $max_val=$array[(string)$max_key[0]];
  $min_key=array_keys($array,min($array));
  $min_val=$array[(string)$min_key[0]];
  if(abs($min_val) > $max_val){
    $payment_split=$payment_split."//".(string)$max_key[0]." gives ".(string)$max_val."-->".(string)$min_key[0];
    $array[(string)$min_key[0]] = $array[(string)$min_key[0]] + $array[(string)$max_key[0]];
    unset($array[(string)$max_key[0]]);
    //$payment_split=$payment_split."length: ".(string)count($array);
    //var_dump(mail( '5415105250@vtext.com', '', "1" ));
  } elseif($max_val > abs($min_val)){
    $payment_split=$payment_split."//".(string)$max_key[0]." gives ".(string)abs($min_val)."-->".(string)$min_key[0];
    $array[(string)$max_key[0]] = $array[(string)$max_key[0]] + $array[(string)$min_key[0]];
    unset($array[(string)$min_key[0]]);
    //$payment_split=$payment_split."length: ".(string)count($array);
    //var_dump(mail( '5415105250@vtext.com', '', "2" ));
  } elseif($max_val == abs($min_val)){
    $payment_split=$payment_split."//".(string)$max_key[0]." gives ".(string)abs($min_val)."-->".(string)$min_key[0];
    unset($array[(string)$max_key[0]]);
    unset($array[(string)$min_key[0]]);
    //$payment_split=$payment_split."length: ".(string)count($array);
    //var_dump(mail( '5415105250@vtext.com', '', "3" ));
  } else{
    $payment_split="Error";
  }
}


//asort($array);

  //$max=array_keys($array,max($array));
  //$max_val=$array[(string)$max[0]];
  //$min=array_keys($array,min($array));
  //$min_val=$array[(string)$min[0]];

var_dump(mail( '5415105250@vtext.com', '', "General Info: ".$ryan_send)); 
var_dump(mail( '5415105250@vtext.com', '', "Payment Info: ".$payment_split));
var_dump(mail( '5038882587@vtext.com', '', "General Info: ".$evan_send )); 
var_dump(mail( '5038882587@vtext.com', '', "Payment Info: ".$payment_split ));
var_dump(mail( '5036809957@vtext.com', '', "General Info: ".$sean_send )); 
var_dump(mail( '5036809957@vtext.com', '', "Payment Info: ".$payment_split ));
var_dump(mail( '5039546367@txt.att.net', '', "General Info: ".$grant_send )); 
var_dump(mail( '5039546367@txt.att.net', '', "Payment Info: ".$payment_split ));
var_dump(mail( '5033140888@vtext.com', '', "General Info: ".$riley_send )); 
var_dump(mail( '5033140888@vtext.com', '', "Payment Info: ".$payment_split ));


//Change snapshot_to_dates to indicate completion of pay

$get_dates="UPDATE house_bills SET snapshot_to_date = CURRENT_TIMESTAMP WHERE snapshot_to_date = '0000-00-00 00:00:00'";
$update_dates=mysql_query($get_dates);



//var_dump(mail( '5415105250@vtext.com', '', implode($array) ));

//var_dump(mail( '5415105250@vtext.com', '', $array[0][0].$array[1][0].$array[2][0].$array[3][0] ));


//while($row=mysql_fetch_array($ryan_result)){
//  		$ryan_send="Name: ".$row["payee_name"]." Paid Date: ".$row["paid_date"]." Snapshot to Date: ".$row["snapshot_to_date"]." Amount Paid: ".$row["amount_paid"]." For What: ".$row["for_what"];
//  		var_dump(mail( '5415105250@vtext.com', '', $ryan_send ));
//};

/*$evan="SELECT * FROM house_bills WHERE payee_name = 'Evan'";
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

$grant="SELECT * FROM house_bills WHERE payee_name = 'Grant'";
$grant_result=mysql_query($grant);

while($row=mysql_fetch_array($grant_result)){
  		$grant_send="Name: ".$row["payee_name"]." Paid Date: ".$row["paid_date"]." Snapshot to Date: ".$row["snapshot_to_date"]." Amount Paid: ".$row["amount_paid"]." For What: ".$row["for_what"];
      var_dump(mail( '5039546367@txt.att.net', '', $grant_send ));
};
*/

?>
</body>
</html>
