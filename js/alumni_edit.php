<? session_start();
    if(!session_is_registered('email')){
        header("location:alumni_login.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="js/header.js" type="text/javascript"></script>

<body>
<div class="container" style="height:650px;">

<div  class="myheader">
</div>

<script src="js/menu.js" type="text/javascript"></script>

<div class="mainarea">
	<div class="maintext" style="width:510px;height:350px;"><br />
		<div class="textpadder" style="width:500px;">
			<span class="titletext">Update your information</span>
			<br />
			<br />
            
            <?
                include 'alumni/fetch_user_info.php';
            ?>
    
            <form action="alumni/save.php" method="post">
                <input type="hidden" name="user_id" value="<? echo $user_id; ?>"></input>
                <p>
                    <span class="label">Full Name: </span>
                    <input type="text" class="alumni" name="full_name" value="<? echo $name; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Phone Number: </span>
                    <input type="text" class="alumni" name="phone_number" value="<? echo $phone; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">University: </span>
                    <input type="text" class="alumni" name="university" value="<? echo $university; ?>"></input>
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
                    <input type="text" class="alumni" name="company_name" value="<? echo $employer; ?>"></input>
                </p>
                
                <br />
                
                <p>
                    <span class="label">Position: </span>
                    <input type="text" class="alumni" name="position" value="<? echo $position; ?>"></input>                
                </p>
                
                <br />
                
                <p>
                    <span class="label">Hobby: </span>
                    <input type="text" class="alumni" name="hobby" value="<? echo $hobby; ?>"></input>                
                </p>
                
                <br />
                
                <input type="submit" value="Save" />
                
            </form>
		</div>
	</div><!--/textpadder--><!--/maintext-->

	<br style="clear:both;" />



</div><!--/mainarea-->

<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>



