<?
include 'config.php';
include 'opendb.php';

$email = $_SESSION['email'];

$query  = "SELECT u.email AS email, " .
          "       u.user_pk as user_id, ".
          "       i.photo_url as phtoto_url, " .
          "       i.name as name, " .
          "       i.phone as phone, " .
          "       i.university as university, " .
          "       i.company as employer, " .
          "       i.position as position, " .
          "       i.hobby as hobby, " .
          "       e.name as event_name, " .
          "       e.event_pk as event_id " .
          "  FROM users u, information i, events e " .
          " WHERE u.user_pk = i.user_fk and i.event_fk = e.event_pk AND u.email='{$email}';";
$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $university = $row['university'];
    $employer = $row['employer'];
    $position = $row['position'];
    $hobby = $row['hobby'];
    $user_id = $row['user_id'];
    $event_id = $row['event_id'];
    /*
    echo "<td><img src='{$row['photo_url']}'></td>";
    echo "<td>{$row['event_name']}</td>";
    */
}

$query = "SELECT event_pk, name FROM events ORDER BY event_pk";

$events = array();

$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    $events[] = array("id" => $row['event_pk'], "name" => $row['name']);
}

include 'closedb.php';
?> 