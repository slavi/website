<?

include 'config.php';
include 'opendb.php';

$name = mysql_real_escape_string($_POST['full_name'], $conn);
$phone = mysql_real_escape_string($_POST['phone_number'], $conn);
$university = mysql_real_escape_string($_POST['university'], $conn);
$event_id = mysql_real_escape_string($_POST['event'], $conn);
$employer = mysql_real_escape_string($_POST['company_name'], $conn);
$position = mysql_real_escape_string($_POST['position'], $conn);
$hobby = mysql_real_escape_string($_POST['hobby'], $conn);
$user_id = mysql_real_escape_string($_POST['user_id'], $conn);

$query  = sprintf(
          "UPDATE information " .
          "   SET name = '%s', " .
          "       phone = '%s', " .
          "       university = '%s', " .
          "       event_fk = '%d', " .
          "       company = '%s', " .
          "       position = '%s', " .
          "       hobby = '%s' " .
          " WHERE information.user_fk = '%s';",
          $name,
          $phone,
          $university,
          $event_id,
          $employer,
          $position,
          $hobby,
          $user_id);

$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

header( 'Location: ../alumni_list.php' ) ;

include 'closedb.php';
?>