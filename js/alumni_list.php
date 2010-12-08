<? session_start();
    if(!session_is_registered('email')){
        header("location:alumni_login.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="js/header.js" type="text/javascript"></script>

<body>
<div class="container" style="height:750px;">

<div  class="myheader">
</div>

<script src="js/menu.js" type="text/javascript"></script>

<div class="mainarea">
	<div class="maintext" style="width:510px;"><br />
		<div class="textpadder" style="width:500px;">
			<span class="titletext">Alumni List</span>
			<br />
			<br />
            
            <?
                include 'alumni/list.php';
            ?>
            
            <a href="alumni_edit.php">Edit my details</a>&nbsp;
            <a href="alumni/logout.php">Logout</a>
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />



</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



