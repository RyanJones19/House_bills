<?php
// Inialize session
session_start();

// Include database connection settings

$dbcnx = @mysql_connect("mysql.cs.orst.edu", "cs275_jonesry", "9285");
if (!$dbcnx) {
	echo 'connect fail';
	exit();
}

$db = mysql_select_db("cs275_jonesry", $dbcnx);
if (!$db) {
	echo 'select fail';
	exit();
}
?>
<?php
$username = mysql_real_escape_string($_POST['username']);
$password =$_POST['password'];
$password = md5($password);

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM users WHERE (username = '" . $username . "') and (password = '" . $password . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: securedpage.php');
}
else {
// Jump to login page
header('Location: index.php');
}

?>
