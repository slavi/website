<?php 
  require_once "./php/template_helpers.php";
  
  $past_workshops = array(
    construct_workshop("Bankya, November 2010", "./workshop_2010.php"),
    construct_workshop("Bankya, November 2009", "./workshop_2009.html"),
    construct_workshop("Gyuletchica, November 2008", "./workshop_2008_fall.html"),
    construct_workshop("Zlatni Piasatsi, May 2008", "./workshop_2008.html"),
    construct_workshop("Gyuletchica, November 2007", "./workshop_2007.html"),
    construct_workshop("Gyuletchica, November 2006", "./workshop_2006.html"));

  $current_workshops = array(construct_workshop("Apriltsi, April 2011", "./workshop_2011.php"));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="js/header.js" type="text/javascript"></script>

<body>
<div class="containerNoSize">
  <div  class="myheader"></div>
  
  <script src="js/menu.js" type="text/javascript"></script>
  
  <div class="mainarea">
    
    <div class="maintextNoSize" style="width: 372px;"><br />
      
      <div class="textpadderNoSize" style="width:342px;">
        
        <span class="titletext">Workshops</span>
        
        <p>
          <em>
"I am happy that I had the chance to participate in the "New Normal" Workshop of Aleksander Foundation 
in 2009. It was a very enriching experience that made me think how active and 
motivated one should be in order to achieve their career aims. What I enjoyed most was the 
knowledge-sharing environment of the workshop. I had a great time networking with very smart 
and interesting people, coming from different universities.
<br />
<br />Furthermore the people from Aleksander 
Foundation are very open-minded and helpful, especially when it comes to explaining something you 
have special interest in or have misunderstood. I am really pleased that they selected very 
knowledgeble and I guess in day-to-day life very busy lecturers who were willing to spend their 
time with us and share know-how. Apart from the learning and networking part, participating in the 
workshop is also a great opportunity to challenge yourself in order to understand how good team 
player you are, do you really understand finance and how good are your analytical and reasoning skills. 
<br />
<br />
So do not hesitate to apply for Aleksander Foundation's Workshop, because there are some great alumni 
who look forward to meeting you."
</em>
</p>
<br />
<p style="text-align: right">
    <strong>Irina Staneva</strong><br />
    <em>Student of Economics in Sofia University's Faculty of Economics and Business Administration</em></p>
<br />
<br />
<strong>The Aleksander Foundation</strong> is committed to developing student's skills
through applied, hands-on workshops. The workshops are weekend-long
trainings targeted towards undergraduate and graduate students in economics
and finance. The topic of each event is chosen from the current national &amp;
worldwide economic environment. The focal point of the first two workshops
was market volatility and trading tactics, respectively. The Business
Development Workshop however, was more micro-oriented and focused on
strategies for successful businesses. The program itself is diversified with
lectures, trading games, team exercises and contests. The intensity of the
program is balanced by intermediary debates with top industry professionals,
informal discussions with the organisers and parties in the evenings. The
workshops also provide students with unmatched opportunities for idea
generation and networking.
<br />
<br />

<?php
  if (isset($current_workshops) && count($current_workshops) > 0)
  {
    echo "<b>Current Workshops:</b><br />";
    render_list(200, $current_workshops);
    echo "<br />";
  }
?>

            <b>Past Workshops: </b><br />
            <?php render_list(200, $past_workshops) ?>
</div>
</div>
<!--/textpadder--><!--/maintext-->
<div class="imageholder"></div>
<!--/imageholder-->
</div>
<!--/mainarea-->


<script src="js/footer.js" type="text/javascript"></script>

</div><!--/Container-->
</body>
</html>
