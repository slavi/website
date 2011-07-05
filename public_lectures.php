<?php 

  require_once "./php/template_helpers.php";
  
  $past_lectures = array(construct_link("Marketing: From Theory to Practice", "./lecture_jan_2011.php"));

  $current_lectures = array();
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
				    
				    <span class="titletext">Public Lectures</span>
				      
				      <br />
				      <br />
Aleksander Foundation believes that Bulgarian education should be more integrated in the global
academic community, taking advantage of the knowledge and traditions of the world scientific society. The series of public lectures that Aleksander Foundation plans to organize are natural choice for the attainment of this goal. We plan to invite to Bulgaria outstanding speakers with excellent academic reputation from respected institutions for higher education around the globe. We will start with lectures in the fields of business, finance and economics and will gradually expand our program including noted speakers from other academic fields.
              <br /><br />

<?php
  if (isset($current_lectures) && count($current_lectures) > 0)
  {
    echo "<b>Scheduled Public Lectures:</b><br />";
    render_list(250, $current_lectures);
    echo "<br />";
  }
?>

            <b>Past Public Lectures: </b><br />
            <?php  render_list(250, $past_lectures) ?>

          </div>
        </div><!--/textpadder--><!--/maintext-->

        <div class="imageholderlse"></div> <!--/imageholder-->

      </div><!--/mainarea-->

      <script src="js/footer.js" type="text/javascript"></script>
      
      
    </div><!--/Container-->
  </body>
</html>
