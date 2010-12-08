<? session_start();
    if(!session_is_registered('login')){
        header("location:alumni_login.php");
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
	<div class="maintextNoSize" style="width:550px;"><br />
		<div class="textpadderNoSize" style="width:550px;">
			<span class="titletext">Alumni List</span>
            <?
                include 'alumni/menu.php';
            ?>
            
            <div style="font-size: 10px;">
            <?
                include 'alumni/list.php';
            ?>
            </div>
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />



</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



