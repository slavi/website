<?php require_once "./php/template_helpers.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<script src="js/header.js" type="text/javascript"></script>
	<body>
		<div class="containerNoSize">
			<div class="myheader"></div>
			<script src="js/menu.js" type="text/javascript"></script>
			
			<div class="mainarea">
				<div class="maintextNoSize" style="width: 372px;">
				  
				  <br />
					
					<div class="textpadderNoSize" style="width:342px;">
						<span class="titletext"><?php echo $titleText ?></span>
						
						<br />
						
						<span class="subtitetext"><?php echo $subText ?></span><br />
						
						<br />
						<?php echo $announcement ?>
						
					</div><!--/textpadder-->
				</div><!--/maintext-->
				
				<div class="imageholderlse"></div>
				
				<br style="clear:both;" />
				
				<br style="clear:both;" />
				
				<div class="backtotext"></div>
				
				<div class="box-bg">
				  <div style="position:relative;width:100%;display:block;"></div>
				  
				  <div id="justNeedaHolder">
				    
				    <div class="trustees" style="width:500px;" >
				      
				      <span class="titletext">The Event</span>
				      
				      <br />
				      
				      <br />
				      
				      Eligible Applicants will be:
				      
				      <br />
				      
				      <?php render_list(500, $requirements); ?>
				      
				      <br />
              
              The scholarship will cover:
              
              <br />
              
              <?php render_list(500, $coverage); ?>
              <br />
            </div><!--/Trustees-->
          </div><!--/justNeedaHolder-->
        </div><!--/box-bg-->

        <div class="box-bg">
          
          <div style="position:relative;width:100%;display:block;"></div>
          
          <div id="justNeedaHolder">
            <div class="trustees" style="width:500px;" >
              <span class="titletext">The Application</span>
              
              <br />
              <br />
              
              <b>First Round - Documents:</b>
              
              <br />
              <br />
              
              <?php if (!$expired) { ?>
              All documents should be completed in English, clearly labeled (First Name, Second Name, Document Name - for e.g. Aleksander Petrov, CV) and sent to the e-mail address below.
              <?php } else { ?>
                All documents should be completed in English and clearly labeled (First Name, Second Name, Document Name - for e.g. Aleksander Petrov, CV).
              <?php } ?>
              
              <br />
              <br />
              
              <?php render_list(500, $application)?>
              
              <?php if (!$expired) { ?>
              <p align="center" style="font-weight: bold;">
                <a href="mailto:LSE@aleksanderfoundation.org">LSE@aleksanderfoundation.org</a><br />
                Deadline for all applications - <?php echo $applicationDeadline; ?>
              </p>
              
              <br />
              <br />
              <?php } ?>
              
              <b>Second Round - Interviews<?php echo ((!$expired) ? ":" : "."); ?></b>
              
              <br />
              <br />
              
              <?php if (!$expired) render_list(500, $interviewBullets); ?>
              
              <br />
              
            </div><!--/Trustees-->
          </div><!--/justNeedaHolder-->
          <br style="clear:both;" />
        </div><!--/box-bg-->
        
        <img src="images/hline.jpg" alt="The Aleksander Foundation" /><br />
        
        <div align="right" style="right:30px;" class="bigtext">Are you prepared?</div>
      </div><!--/mainarea-->
      
      <script src="js/footer.js" type="text/javascript"></script>
    </div><!--/Container-->
  </body>
</html>