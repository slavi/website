<?php
  require_once "./php/template_helpers.php";
  
  $titleText = "Economics Of European Integration";
  $subText = "24th July - 13th August 2011, London";
  
  $announcement = "The Aleksander Foundation announces a competition for <b>one</b> full scholarship 
  for Economics Of European Integration,
  The London School of Economics (LSE) Summer School 2011,
  24th July - 13th August 2011, London.";
  
  $requirements = array(
    "In their 4th year/ Masters of Economics/Finance studies at a recognized Bulgarian University", 
    "Have already successfully completed courses in micro- and macroeconomics, as well as in mathematics and statistics", 
    "Possess an excellent academic record and strong knowledge of the English language"
    );
  
  $coverage = array(
    "The cost of the course", 
    "Three week accommodation at an LSE Residence Hall", 
    "Return plane ticket to London and daily expense allowance"
    );
  
  $studyRequirements = array(
    '"The European sovereign debt crisis - how bad a worst case scenario is?"<br /><br />',
    '"European Union - discuss pros & cons for a break up as a solution to the sovereign crisis"');
  
  $application = array(
    "Curriculum Vitae (CV) of maximum 2 pages</br><br />", 
    "Essay of 1000 words on one of the following topics:<br />" . create_ul($studyRequirements));
  
  $interviewBullets = array(
    "Four short-listed candidates will be notified by e-mail on <b>Monday 23th May</b> and invited for an interview",
    "The interviews will be held on <b>Wednesday 25th May</b> at the Faculty of Economics and Business Administration, Sofia University",
    "Final decision on the winning candidate will be announced on <b>Friday 27th May 2011</b>"
  );
  
  $applicationDeadline = "Sunday 15th May 2011, 16:00h";
  
  $expired = false;
  
  include ("./php/template_lse.php");
?>