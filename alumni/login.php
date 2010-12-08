<?

if ($_POST['action'] == 'Login') {
    include 'config.php';
    include 'opendb.php';

    // username and password sent from form
    $login=$_POST['login'];
    $password=$_POST['password'];

    // To protect MySQL injection (more detail about MySQL injection)
    $login = stripslashes($login);
    $password = stripslashes($password);
    $login = mysql_real_escape_string($login);
    $password = mysql_real_escape_string($password);

    $hashed_password = md5($password);

    $sql="SELECT * FROM users WHERE lower(login)=lower('$login') and hashed_password='$hashed_password'";
    $result=mysql_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    
    if($count==1){
        session_register("login");
        session_register("password");
        header("location:../alumni_list.php");
    } else {
        $error_message = "Invalid username or password";
    }
    ob_end_flush();
    
    include 'closedb.php';
} else if ($_POST['action'] == 'Forgot Password') {

    include 'config.php';
    include 'opendb.php';

    // username and password sent from form
    $login=$_POST['login'];

    // To protect MySQL injection (more detail about MySQL injection)
    $login = stripslashes($login);
    $login = mysql_real_escape_string($login);

    $hashed_password = md5($password);

    $sql="SELECT * FROM users WHERE lower(login)=lower('$login')";
    $result=mysql_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    
    if($count==1){
        $password = rand(100000, 999999);
        $hashed_password = md5($password);
        
        $message = 
        "Dear Aleksander Foundation Alumnus, \n\n" .
        "Your new password for http://www.aleksanderfoundation.org is: " . $password . "\n\n" .
        "When you log in, you can use the 'Change password' link in the top-right corner to change your password.";
    
        if (mail($login, "[Aleksander Foundation] Password reset", $message)) {
            $error_message = "An email has been sent to your email address.";
            
            $sql="UPDATE users SET hashed_password='$hashed_password' WHERE lower(login)=lower('$login')";
            $result=mysql_query($sql);
         } else {
            $error_message = "Message delivery failed.";
        }
    } else {
        $error_message = "No such user in the database.";
    }
    
    include 'closedb.php';
}
?>