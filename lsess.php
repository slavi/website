<?php 

  require_once "./php/template_helpers.php";
  
  $past_summer_schools = array(
    construct_school(2010, get_lse_php_url(2010)),
    construct_school(2009, get_lse_php_url(2010)),
    construct_school(2008, get_lse_php_url(2010)),
    construct_school(2007, "./files/lse_2007.pdf"),
    construct_school(2006, get_lse_php_url(2010)));

  $current_summer_schools = array(construct_school(2011, get_lse_php_url(2011)));
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
				    
				    <span class="titletext">LSE Summer School</span>
				      
				      <br />
				      <br />
The London School of Economics is the leading social science institution in
the world. The School's reputation as a global leader has been built up over
the hundred years since it was founded. It has an atmosphere of vigorous
intellectual argument and informed debate - a laboratory where ideas from
all perspectives are developed, tested, criticised and disseminated to the
wider world. LSE Departments consistently receive the highest possible marks
for their teaching and research, confirming commitment to academic
excellence. The Summer School offers an opportunity for you to share this
tradition of excellence with LSE faculty.
              <br /><br />

<?php
  if (isset($current_summer_schools) && count($current_summer_schools) > 0)
  {
    echo "<b>Current LSE Summer School:</b><br />";
    render_list(250, $current_summer_schools);
    echo "<br />";
  }
?>

            <b>Past LSE Summer Schools: </b><br />
            <?php  render_list(250, $past_summer_schools) ?>

          </div>
        </div><!--/textpadder--><!--/maintext-->

        <div class="imageholderlse"></div> <!--/imageholder-->

      </div><!--/mainarea-->

      <script src="js/footer.js" type="text/javascript"></script>
      
      
    </div><!--/Container-->
  </body>
</html>
