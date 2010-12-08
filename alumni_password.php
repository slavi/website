<? session_start();
    if(!session_is_registered('login')){
        header("location:alumni_login.php");
    } else {
        include 'alumni/password.php';
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="js/header.js" type="text/javascript"></script>

<body>
<div class="container" style="height:550px;">

<div  class="myheader">
</div>

<script src="js/menu.js" type="text/javascript"></script>

<div class="mainarea">
	<div class="maintext" style="width:510px;"><br />
		<div class="textpadder" style="width:500px;">
			<span class="titletext">Change your password</span>
            <?
                include 'alumni/menu.php';
            ?>
            
            <?
                include 'alumni/error_check.php';
            ?>
    
            <form method="post">
                <p>
                    <span class="label">Old password: </span>
                    <input type="password" class="alumni" name="password_old"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">New Password: </span>
                    <input type="password" class="alumni" name="password"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">New Password (again): </span>
                    <input type="password" class="alumni" name="password_confirm"></input>
                </p>
                
                <br />
                
                <br />
                
                <input type="submit" name="action" value="Save" />
                
            </form>
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />



</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



