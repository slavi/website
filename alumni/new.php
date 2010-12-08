<?

include 'config.php';
include 'opendb.php';

$email = strtolower(mysql_real_escape_string($_POST['email'], $conn));
$password = rand(100000, 999999);

$query  = sprintf(
          "INSERT INTO users(login, hashed_password) VALUES ('%s', '%s')",
          $email,
          md5($password));

$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

$query  = "SELECT MAX(user_pk) as user_pk from users;";
$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

$row = mysql_fetch_array($result, MYSQL_ASSOC);
$user_pk = $row['user_pk'];

$query = sprintf(
         "INSERT INTO information (user_fk, name, email, event_fk, university, company) VALUES('%d', '%s', '%s', '%d', '%s', '%s')",
         $user_pk,
         $email,
         $email,
         8,
         'unknown',
         'unknown');

$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));
         
echo $password;
         
include 'closedb.php';
?>