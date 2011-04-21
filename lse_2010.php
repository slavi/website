<?php
  require_once "./php/template_helpers.php";
  
  $titleText = "Analysis and Management of Financial Risk";
  $subText = "26 July - 13 August 2010, London";
  
  $announcement = "The Aleksander Foundation announces a competition for <b>one</b> full scholarship for Analysis and Management of Financial Risk, The London School of Economics (LSE) Summer School 2010,
  26 July - 13 August 2010, London.";
  
  $requirements = array(
    "In their 4th year/ Masters of Economics/Finance studies at a recognized Bulgarian University", 
    "Have already successfully completed a course in mathematics and statistics", 
    "Possess an excellent academic record and strong knowledge of the English language"
    );
  
  $coverage = array(
    "The cost of the course", 
    "Three week accommodation at an LSE Residence Hall", 
    "Return plane ticket to London and daily expense allowance"
    );
  
  $studyRequirements = array(
    "Assess the company's exposure to various risk factors. These can include (but are not limited to): interest rate risk, commodity risk, market risk, FX risk, credit risk (700 words)",
    "If information is available, identify actions the company has taken to manage these exposures (300 words)");
  
  $application = array(
    "Curriculum Vitae (CV) of maximum 2 pages</br><br />", 
    "Case Study (1000 words) on a SOFIX company. The study should contain:<br />" . create_ul($studyRequirements));
  
  $interviewBullets = array();
  
  $applicationDeadline = "";
  
  $expired = true;
  
  include ("./php/template_lse.php");
?>