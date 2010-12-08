<?
include 'config.php';
include 'opendb.php';

function utf8_substr($str,$start)
{
   preg_match_all("/./su", $str, $ar);

   if(func_num_args() >= 3) {
       $end = func_get_arg(2);
       return join("",array_slice($ar[0],$start,$end));
   } else {
       return join("",array_slice($ar[0],$start));
   }
}

function preprocess_email($str)
{
   $pos = strpos($str, "@");
   if ($pos)
   {
      return substr($str, 0, $pos);
   }
   return $str;
}

function preview_text($text, $limit) {
    $text = trim($text);
    
    if (strlen($text) < $limit) return $text;
    
    return substr($text, 0, $limit) . " ...";
}

$query  = "SELECT i.email AS email, " .
          "       u.login as login, " .
          "       i.photo_url as photo_url, " .
          "       i.name as name, " .
          "       i.phone as phone, " .
          "       i.university as university, " .
          "       i.company as employer, " .
          "       i.position as position, " .
          "       i.hobby as hobby, " .
          "       e.name as event_name " .
          "  FROM users u, information i, events e " .
          " WHERE u.user_pk = i.user_fk and i.event_fk = e.event_pk" .
          " ORDER BY i.name ASC";
$result = mysql_query($query) or die ('Query failed: ' . mysql_error($conn));

echo "<table width='100%' style='border-collapse: collapse; border: 0px solid #cccccc;'>";
echo "<tr>";
echo "<th>Photo</th>";
echo "<th>Name</th>";
echo "<th>Event</th>";
echo "<th>University</th>";
echo "<th>Employer</th>";
echo "</tr>\n";

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $name = preview_text(preprocess_email($row['name']), 30);
    $university = preview_text($row['university'], 20);
    $employer = preview_text($row['employer'], 25);
    
    $size = getimagesize($row['photo_url']);
    $width = $size[0];
    $height = $size[1];
    $scale = min(40 / $width, 50 / $height);
    $width *= $scale;
    $height *= $scale;
    
    
    echo "<tr>\n";
    echo "<td width='40px' height='50px' class='center'><img src='{$row['photo_url']}' width='{$width}' height='{$height}' /></script></td>\n";
    echo "<td class='left'><a href='alumni_show.php?user={$row['login']}'>{$name}</a></td>\n";
    echo "<td class='left'>{$row['event_name']}</td>\n";
    echo "<td class='left'>{$university}</td>\n";
    echo "<td class='left'>{$employer}</td>\n";
    echo "</tr>\n";
}

echo "</table>";

include 'closedb.php';
?> 