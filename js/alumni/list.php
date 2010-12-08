<?
include 'config.php';
include 'opendb.php';

$query  = "SELECT u.email AS email, " .
          "       i.photo_url as phtoto_url, " .
          "       i.name as name, " .
          "       i.phone as phone, " .
          "       i.university as university, " .
          "       i.company as employer, " .
          "       i.position as position, " .
          "       i.hobby as hobby, " .
          "       e.name as event_name " .
          "  FROM users u, information i, events e " .
          " WHERE u.user_pk = i.user_fk and i.event_fk = e.event_pk";
$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

echo "<table width='100%'>";
echo "<tr>";
echo "<th>Photo</th>";
echo "<th>Name</th>";
//echo "<th>Phone</th>";
echo "<th>Event</th>";
echo "<th>University</th>";
echo "<th>Employer</th>";
//echo "<th>Position</th>";
//echo "<th>Hobby</th>";
echo "</tr>";

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    if ($_SESSION['email'] == $row['email']) {
        echo "<tr style='color: #ff0000;'>";
    } else {
        echo "<tr>";
    }
    echo "<td><img src='{$row['photo_url']}'></td>";
    echo "<td><a href='mailto:{$row['email']}'>{$row['name']}</a></td>";
    //echo "<td>{$row['phone']}</td>";
    echo "<td>{$row['event_name']}</td>";
    echo "<td>{$row['university']}</td>";
    echo "<td>{$row['employer']}</td>";
    //echo "<td>{$row['position']}</td>";
    //echo "<td>{$row['hobby']}</td>";
    echo "</tr>";
}

echo "</table>";

include 'closedb.php';
?> 