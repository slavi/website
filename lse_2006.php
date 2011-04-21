<?php
  require_once "./php/template_helpers.php";
  
  $titleText = "Options, Futures and Other Financial Derivatives Course";
  $subText = "24 July - 11 August 2006, London";
  
  $announcement = "The Aleksander Foundation announces a competition for <b>one</b> full scholarship for:
  Options, Futures and Other Financial Derivatives Course, The London School of Economics (LSE) Summer School 2006, 24 July - 11 August 2006, London.";
  
  $requirements = array(
    "In their 3rd year of studies in either Economics or Business Administration at the Faculty of Economics and Business Administration (FEB), Sofia University", 
    "Have an excellent academic record and strong knowledge of the English language", 
    "Be able to demonstrate outstanding performance outside the academic world"
    );
  
  $coverage = array(
    "The cost of the course", 
    "Three week accommodation at an LSE Residence Hall", 
    "Return plane ticket to London",
    "Daily expense allowance"
    );
  
  $application = array(
    "Completed LSE application form (forms available form Iva Djakova, room 409 or FEB website)<br />", 
    "Curriculum Vitae (CV)<br />",
    "Translated and certified academic transcripts<br />",
    "Essay on the topic of: \"Real Estate Market in Bulgaria - Myths and Reality\" (800 - 1000 words)<br />");
  
  $interviewBullets = array();
  
  $applicationDeadline = "";
  
  $expired = true;
  
  include ("./php/template_lse.php");
?>