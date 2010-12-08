<?
if ($_POST['action'] == 'Save') {

    include 'config.php';
    include 'opendb.php';

    // username and password sent from form
    $password_old=$_POST['password_old'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];

    // To protect MySQL injection (more detail about MySQL injection)
    $password_old = stripslashes($password_old);
    $password = stripslashes($password);
    $password_confirm = stripslashes($password_confirm);

    $password_old = mysql_real_escape_string($password_old);
    $password = mysql_real_escape_string($password);
    $password_confirm = mysql_real_escape_string($password_confirm);

    $hashed_password_old = md5($password_old);
    $hashed_password_new = md5($password);

    $sql="SELECT * FROM users WHERE lower(login)=lower('$login') and hashed_password='$hashed_password_old'";
    $result=mysql_query($sql); // or die ('Query failed: ' . mysql_error($conn));

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);

    if($count==1) {
        if ($password == $password_confirm) {
            $sql="UPDATE users SET hashed_password='$hashed_password_new' WHERE lower(login)=lower('$login') and hashed_password='$hashed_password_old'";
            $result=mysql_query($sql); //or die ('Query failed: ' . mysql_error($conn));
        } else {
            $error_message = 'Passwords do NOT match!';
        }
    } else {
        $error_message = 'Invalid old password entered!';
    }
    
    if ($error_message == "") {
        header("location:../alumni_list.php");
        ob_end_flush();
    }

    include 'closedb.php';
}
?>