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
	<div class="maintextNoSize" style="width:510px;"><br />
		<div class="textpadderNoSize" style="width:500px;">
			<span class="titletext">User information</span>
            <?
                include 'alumni/menu.php';
            ?>
            
            <?
                include 'alumni/fetch_user_info.php';
            ?>
            
            <a href="<?echo $photo_url; ?>" target="_blank">
                <?
                    $size = getimagesize($photo_url);
                    $width = $size[0];
                    $height = $size[1];
                    $scale = min(300 / $width, 200 / $height);
                    $width *= $scale;
                    $height *= $scale;
                    echo "<img src='{$photo_url}' width='{$width} height='{$height}' />";
                ?>
            </a>
            
            <br />
            <br />
            
            <p>
                <span class="labelBold">Full Name: </span>&nbsp;<? echo $name; ?>
            </p>
            
            <br />
            
            <p>
                <span class="labelBold">Email: </span>&nbsp;<? echo $email; ?>
            </p>
            
            <br />
            
            <p>
                <span class="labelBold">Phone Number: </span>&nbsp;<? echo $phone; ?>
            </p>
            
            <br />
            
            <p>
                <span class="labelBold">University: </span>&nbsp;<? echo $university; ?>
            </p>
            
            <br />
            
            <p>
                <span class="labelBold">Event: </span>&nbsp;<? echo $event_name; ?>
            </p>
                
            <br />

            
            <p>
                <span class="labelBold">Employer: </span>&nbsp;<? echo $employer; ?>
            </p>
            
            <br />
            
            <p>
                <span class="labelBold">Position: </span>&nbsp;<? echo $position; ?>         
            </p>
            
            <br />
            
            <p>
                <span class="labelBold">Hobby: </span>&nbsp;<? echo $hobby; ?>
            </p>
            
            <br /><br />
            
            <a href="alumni_list.php">Back</a>
            
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />



</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



