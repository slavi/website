<?

if ($_POST['action'] == 'Save') {
    include 'config.php';
    include 'opendb.php';
    
    $error_message = "";

    $name = mysql_real_escape_string($_POST['full_name'], $conn);
    $email = mysql_real_escape_string($_POST['email'], $conn);
    $phone = mysql_real_escape_string($_POST['phone_number'], $conn);
    $photo_url = mysql_real_escape_string($_POST['photo_url'], $conn);
    $university = mysql_real_escape_string($_POST['university'], $conn);
    $event_id = mysql_real_escape_string($_POST['event'], $conn);
    $employer = mysql_real_escape_string($_POST['company_name'], $conn);
    $position = mysql_real_escape_string($_POST['position'], $conn);
    $hobby = mysql_real_escape_string($_POST['hobby'], $conn);
    $user_id = mysql_real_escape_string($_POST['user_id'], $conn);
    
    //------------------------------------- Photo upload begin ----------------------------------------------//
    if (basename( $_FILES['photo']['name'])) {
    
        if ($photo_size > 100000) {
            $error_message = "Your file is too large.";
        }
        
        switch($photo_type) {
            case "image/gif":
                $type = ".gif";
                break;
            case "image/png":
            case "image/x-png":
                $type = ".png";
                break;
            case "image/jpg":
            case "image/pjpg":
            case "image/jpeg":
            case "image/pjpeg":
                $type=".jpg";
                break;
        }    

        if ($type == "") {
            $error_message = "Image format unsupported: " . $photo_type;
        }
        
        if ($error_message == "") {
            $relative_path = "";
            $target = "images/alumni_photos/" . $user_id . "_photo" . $type;
            if(move_uploaded_file($_FILES['photo']['tmp_name'], $relative_path . $target)) {
                //echo "The file has been uploaded";
                $photo_url = $target;
            } else {
                $error_message = "Sorry, there was a problem uploading your file.";
            }
        }
    } else if ($photo_url == "images/alumni_photos/anonymous.gif") {
        $error_message = "You must upload a photo - photos are required.";
    }
    //------------------------------------- Photo upload end ----------------------------------------------//

    if ($error_message == "") {
        $query  = sprintf(
                  "UPDATE information " .
                  "   SET name = '%s', " .
                  "       email = '%s', " .
                  "       phone = '%s', " .
                  "       photo_url = '%s', " .
                  "       university = '%s', " .
                  "       event_fk = '%d', " .
                  "       company = '%s', " .
                  "       position = '%s', " .
                  "       hobby = '%s' " .
                  " WHERE information.user_fk = '%s';",
                  $name,
                  $email,
                  $phone,
                  $photo_url,
                  $university,
                  $event_id,
                  $employer,
                  $position,
                  $hobby,
                  $user_id);

        $result = mysql_query($query); // or die ('Query failed: ' . mysql_error($conn));
    }
    
    include 'closedb.php';
    
    if ($error_message == "") {
        header( 'Location: ../alumni_list.php' ) ;
    }
} else if ($_POST['action'] == 'Back') {
    header( 'Location: ../alumni_list.php' ) ;
}
?>