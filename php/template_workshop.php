<?
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
          
          <span class="titletext"><?php echo $titleText; ?></span>
          
          <br />
          
          <span class="subtitetext"><?php echo $subtitleText; ?></span><br />
          
          <br />
          
          <?php if (isset($questions)) { ?>
          
          <div class="blue-box">
            <div style="position:relative;left:35px;width:270px;top:9px;line-height:1.1;">
              <?php echo $questions; ?>
		        </div>
          </div><!--/Blue-box-->
          
          <br />
          
          <?php } ?>
          
          <span class="highlight">The Event:</span> 
          
          <?php echo $eventText; ?>
          
        </div><!--/textpadder-->
      </div><!--/maintext-->
      
      <div class="<?php echo $imageHolderStyle; ?>"></div><!--/imageholder-->
      
      <?php
        if (isset($locationText))
        {
          echo '<br style="clear:both;" />';
          echo construct_box("Location", $locationText);
        }
        
        echo '<br style="clear:both;" />';      
        echo construct_box("Eligible Applicants", $eligibleApplicants);
      
        if (isset($accomodationText))
        {
          echo '<br style="clear:both;" />';
          echo construct_box("Accomodation", $accomodationText);
        }
        
        if (isset($speakers))
        {
          echo '<br style="clear:both;" />';
          echo construct_box("The Speakers", construct_list(500, $speakers));
        }
                
        if ($expired)
        {
          echo '<br style="clear:both;" />';
          echo construct_gallery_box($image_prefix, $num_images, $num_images_per_row, $num_rows, $galleryCaption, $alt, $verticalImages);
        }
        if (isset($applicationRequirements))
        {
          echo '<br style="clear:both;" /><br /><br />';
          echo construct_box("The Application", construct_list(500, $applicationRequirements));
        }
      ?>
      
      <br style="clear:both;" /><br /><br />
      
      <img src="images/hline.jpg" alt="The Aleksander Foundation" /><br />
      
      <div align="right" style="right:30px;" class="bigtext"><?php echo $slogan; ?></div>
    </div><!--/mainarea-->
    
    <script src="js/footer.js" type="text/javascript"></script>
    
  </div><!--/Container-->
</body>
</html>
