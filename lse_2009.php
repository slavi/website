<?php
  require_once "./php/template_helpers.php";
  
  $titleText = "Debt Markets";
  $subText = "5 July - 25 July 2009, London";
  
  $announcement = "The Aleksander Foundation announces a competition for <b>one</b> full scholarship for Debt Markets,
  The London School of Economics (LSE) Summer School 2009, 5 July - 25 July 2009, London.";
  
  $requirements = array(
    "In their 4th year/ Masters of Economics/Finance studies at a recognized Bulgarian University", 
    "Have already successfully completed a course in mathematics and statistics", 
    "Possess an excellent academic record and strong knowledge of the English language",
    "Able to demonstrate outstanding performance outside the academic field"
    );
  
  $coverage = array(
    "The cost of the course", 
    "Three week accommodation at an LSE Residence Hall", 
    "Return plane ticket to London",
    "Daily expense allowance"
    );
  
  $application = array(
    "Curriculum Vitae (CV) of maximum 2 pages</br><br />", 
    "Translated and certified academic transcripts (no originals necessary)</br><br />",
    "Essay (1000 words) on the topic of: \"Opportunities and challenges for distressed debt investors. Discuss with specific examples\"</br><br />");
  
  $interviewBullets = array(
    "Five short-listed candidates will be notified by e-mail on <strong>Monday 4th May</strong> and invited for an interview.",
    "The interviews will be held on <strong>Friday 8th May</strong> at the Faculty of Economics and Business Administration, Sofia University",
    "Final decision on the winning candidate will be announced on <strong>Monday 11th May 2009"
    );
  
  $applicationDeadline = "Sunday 26th April 2009, 16:00h";
  
  $expired = true;
  
  include ("./php/template_lse.php");
?>