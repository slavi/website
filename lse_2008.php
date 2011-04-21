<?php
  require_once "./php/template_helpers.php";
  
  $titleText = "Advanced Corporate Finance Course";
  $subText = "27 July - 16 August 2008, London";
  
  $announcement = "The Aleksander Foundation announces a competition for <b>one</b> full scholarship for Advanced Corporate Finance Course, The London School of Economics (LSE) Summer School 2008, 27 July - 16 August 2008, London.";
  
  $requirements = array(
    "In their 4th year/ Masters of Economics/Finance studies at a recognized Bulgarian University", 
    "Have already successfully completed a course in mathematics and statistics", 
    "Possess an excellent academic record and strong knowledge of English",
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
    "Essay (1000 words) on the topic of: \"Why are convertible bonds and preferred stock the financial
    instruments of choice to raise funds in the current market environment? Discuss with examples\"</br><br />");
  
  $interviewBullets = array();
  
  $applicationDeadline = "";
  
  $expired = true;
  
  include ("./php/template_lse.php");
?>