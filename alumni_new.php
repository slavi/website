<? session_start();
    if(!session_is_registered('login')){
        header("location:alumni_login.php");
    } else if($_SESSION['login'] != 'slavi.marinov@gmail.com'){
        header("location:alumni_list.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="js/header.js" type="text/javascript"></script>

<body>
<div class="containerNoSize">

<div  class="myheader">
</div>

<script src="js/menu.js" type="text/javascript"></script>

<div class="mainarea">
	<div class="maintextNoSize" style="width:510px;"><br />
		<div class="textpadderNoSize" style="width:500px;">
			<span class="titletext">Add a new user</span>
			<br />
			<br />
    
            <form action="alumni/new.php" method="post">
                <p>
                    <span class="label">Email address: </span>
                    <input type="text" class="alumni" name="email"></input>
                </p>
                <br />
                
                <input type="submit" name="action" value="Add" />
                
            </form>
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />



</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



