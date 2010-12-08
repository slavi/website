<? session_start();
    if(!session_is_registered('login')){
        header("location:alumni_login.php");
    } else {
        include 'alumni/save.php';
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
			<span class="titletext">Update your information</span>
            <?
                include 'alumni/menu.php';
            ?>
            
            <?
                include 'alumni/fetch_user_info.php';
                include 'alumni/error_check.php';
            ?>
    
            <form enctype="multipart/form-data" method="post">
                <input type="hidden" name="user_id" value="<? echo $user_id; ?>"></input>
                <input type="hidden" name="photo_url" value="<? echo $photo_url; ?>"></input>
                <p>
                    <span class="label">Full Name: </span>
                    <input type="text" class="alumni" maxlength="40" name="full_name" value="<? echo $name; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Email: </span>
                    <input type="text" class="alumni" maxlength="40" name="email" value="<? echo $email; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Upload photo : </span>
                    <input type="file" class="alumni" name="photo" /><br />
                    <i>(max 100k)</i>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Phone Number: </span>
                    <input type="text" class="alumni" maxlength="20" name="phone_number" value="<? echo $phone; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">University: </span>
                    <input type="text" class="alumni" maxlength="25" name="university" value="<? echo $university; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Event: </span>
                    <select name="event">
                    <?
                        for ($i = 0; $i < count($events); $i++) {
                            $selected = "";
                        
                            if ($events[$i]['id'] == $event_id) {
                                $selected = "selected='selected'";
                            }
                            echo "<option " . $selected . "  value='" . $events[$i]['id'] . "'>" .  $events[$i]['name'] . "</option>";
                        }
                    ?>
                    </select>
                </p>
                
                <br />

                
                <p>
                    <span class="label">Employer: </span>
                    <input type="text" class="alumni" maxlength="30" name="company_name" value="<? echo $employer; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Position: </span>
                    <input type="text" class="alumni" maxlength="60" name="position" value="<? echo $position; ?>"></input>                
                </p>
                
                <br />
                
                <p>
                    <span class="label">Hobby: </span>
                    <input type="text" class="alumni" maxlength="130" name="hobby" value="<? echo $hobby; ?>"></input>                
                </p>
                
                <br />
                
                <input type="submit" name="action" value="Back" />&nbsp;&nbsp;
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



