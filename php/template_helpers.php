<?php

function construct_list($width, $items)
{
  $result = '<div id="listFixer" style="top:0;left:25px;width:' . $width . ';" align="left">';
  
  foreach ($items as $item) 
  {
    $result = $result . '<img src="images/bullet.gif" alt="The Aleksander Foundation" />&nbsp;&nbsp;' . $item . '<br />';
  }
  
  $result = $result . "</div><!--/listFixer-->";
  
  return $result;
}

function render_list($width, $items)
{
  echo construct_list($width, $items);
}

function create_ul($items)
{
  $result = "<ul style=\"padding-left: 40px;\">";
  
  foreach ($items as $item)
  {
    $result = $result . "<li style=\"height: auto; line-height: auto;\">" . $item . "</li>";
  }
  
  $result = $result . "</ul>";
  
  return $result;
}

function construct_school($year, $url)
{
  return construct_link("LSE Summer School " . $year, $url);
}

function get_lse_php_url($year)
{
  return "./lse_" . $year . ".php";
}

function construct_link($description, $url)
{
  return '<a href="' . $url . '">' . $description . '</a>';
}

function construct_workshop($description, $url)
{
  return construct_link($description, $url);
}

function construct_box($title, $text)
{
  return
      "<!--BOX BEGINS HERE -->
        <div class=\"box-bgNoSize\">
          <div style=\"position:relative;width:100%;height: 10px; display:block;\"></div>

          <div id=\"justNeedaHolder\">

            <div class=\"trustees\" style=\"width:500px;\" >
              <span class=\"titletext\">" . $title . "</span>

              <br /><br />" . $text . "
      </div><!--/Trustees-->
    </div><!--/justNeedaHolder-->
    <br style=\"clear:both;\" />
  </div><!--/box-bg-->
  <!--BOX ENDS HERE -->";
}

function construct_gallery_box($image_path, $num_images, $num_images_per_row, $num_rows, $gallery_caption, $alt, $verticalImages)
{
  $result = '
  
  <div class="box-bgNoSize" style="background:none;>
    <div style="position:relative;width:100%;height:10px; display:block;"></div>
    
    <div class="titletext" style="position:relative;left:15px;line-height:1.0;">
      Gallery<br />
      <img src="images/hline.jpg" alt="The Aleksander Foundation" />
    </div>
    
    <div  class="boxinfoholderNoSize">
      <table>';
      
  $image_index = 0;
  
  for ($row = 0; $row < $num_rows; $row++)
  {
    $result = $result . "<tr>";
    
    for ($col = 0; $col < $num_images_per_row; $col++)
    {
      $image_index++;
      
      $width = 74;
      $height = 56;
      
      if (in_array($image_index, $verticalImages))
      {
        $width = 42;
      }
      
      $td = '<td>
        <a href = "images/' . $image_path . '/big/' . $image_index . '.jpg" class="highslide" onclick="return hs.expand(this)">
          <img src="images/' . $image_path . '/' . $image_index . '.jpg" alt="'. $alt . '" width="' . $width . '" height = "' . $height .  '"onmouseover = "this.style.top = \'2px\';"   onmouseout="this.style.top=\'0\';" />
          </a></td>';
      
      $result = $result . $td;
    }
    
    $result = $result . "</tr>";
  }
  
  $result = $result . "
  
      </table>
    <div class='highslide-caption' id='thecaption'>" . $gallery_caption . "</div>
  </div><!--/box-bg-->";
  
  return $result;
}

?>