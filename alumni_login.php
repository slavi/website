<?
    include 'alumni/login.php';
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
			<span class="titletext">Please login</span>
			<br />
			<br />
            <?
                include 'alumni/error_check.php';
            ?>
    
            <form method="post">
                <p>
                    <span class="label">Login: </span>
                    <input type="text" class="alumni" name="login"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Password: </span>
                    <input type="password" class="alumni" name="password"></input>
                </p>
                
                <br />
                
                <input type="submit" name="action" value="Login" />&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="action" value="Forgot Password" />
            </form>
            
            <br />
            <br />
            <div style="font-size: 9px;">
            Did you forget your password? Enter your email address in the box above, click the <b>"Forgot Password"</b> button and
            we'll send you an email with your new password.
            </div>
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />

</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



