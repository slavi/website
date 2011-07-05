<?php 

  require_once "./php/template_helpers.php";
  
  $past_reunions = array(construct_workshop("Apriltsi, April 2011", "./reunion_2011.php"),
    					 construct_workshop("Gyuletchica, November 2008", "./reunion_2008.html"));

  $current_reunions = array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <script src="js/header.js" type="text/javascript"></script>
  
  <body>
    <div class="containerNoSize">
      <div class="myheader"></div>
      <script src="js/menu.js" type="text/javascript"></script>
      
      <div class="mainarea">
				<div class="maintextNoSize" style="width: 372px;"><br />
				  
				  <div class="textpadderNoSize" style="width:342px;">
				    
				    <span class="titletext">Alumni Reunions</span>
				      
				      <br />
				      <br />
Aleksander Foundation is regularly organizing not-for-profit get-togethers for its Alumni. Some of them (e.g. the Christmas parties, hiking trips, etc.) take a few hours, but the most significant event - the annual Alumni Reunion, lasts a whole weekend. The Reunions are great opportunity for networking, exchange of information, recreation, hiking and fun. Lectures and team-building games are also part of the agenda, however they are not the focus of the Reunions. All Alumni are eligible (and encouraged) to participate, but are supposed to cover their travel and accommodation costs.
              <br /><br />

<?php
  if (isset($current_reunions) && count($current_reunions) > 0)
  {
    echo "<b>Next Alumni Reunion:</b><br />";
    render_list(250, $current_reunions);
    echo "<br />";
  }
?>

            <b>Past Alumni Reunions: </b><br />
            <?php  render_list(250, $past_reunions) ?>

          </div>
        </div><!--/textpadder--><!--/maintext-->

        <div class="imageholderreunion"></div> <!--/imageholder-->

      </div><!--/mainarea-->

      <script src="js/footer.js" type="text/javascript"></script>
      
      
    </div><!--/Container-->
  </body>
</html>
