<?

include 'config.php';
include 'opendb.php';

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

$hashed_password = md5($password);

$sql="SELECT * FROM users WHERE email='$email' and hashed_password='$hashed_password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("email");
session_register("password");
header("location:../alumni_list.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();

include 'closedb.php';
?>