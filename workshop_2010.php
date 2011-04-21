<?php
require_once "./php/template_helpers.php";

$speakers = array(
  "Krassimir Katev, <em>Former Deputy Finance Minister</em>, Managing Partner, DELTA CAPITAL Int.",
  "Andreana Todorova, Equity Research, FIRST FINANCIAL BROKERAGE HOUSE",
  "Ivo Evgeniev, Managing Director, ROSSLYN CAPITAL PARTNERS",
  "Stuart Till, Former Senior Financial Manager at Shell, CEO, INVESTOR BG GROUP",
  "Sergei Koinov, Managing Partner, FORTON INTERNATIONAL",
  "Aleksander Kurlin, Partner, Independent Law Practice");
  
$titleText = 'The "Future of Finance" Workshop';

$subtitleText = "Bankya, 12th November - 14th November 2010";

$questions = "What is the future of the financial sector? <br />
Is it true that modern finance turned our economy into a casino economy?<br />
Which job positions have a better outlook for the coming decade?<br />";

$eventText = "According to some analysts, the deregulation and growth of the financial sector turned 
the economy into a casino, so instead of managing and distributing risk, modern finance amplified 
them in search of short-term profits. The financial crises turned into economic one and sparked a 
bitter debate between economists in the academic circles. Some non-financial academic pundits 
(criticized for not having enough expertise in the field) argue that the most productive recent 
innovation in the financial sector is the ATM. The financial economists (accused in having vested 
interests) respond that innovations allow for better liquidity management and satisfy better the 
needs of customers. 
<br />
<br />
So where will the financial sector go from now on? What will be impact of the 
pressure from civic society, politics and academics on the financial sector? The correct answer 
to this will be of paramount importance to careers and lives around the world for many years to come. 
So be the one of twenty four students, who together with our distinguished lecturers will discuss 
and brainstorm on the future trends and opportunities in the financial sector. You just can't afford to miss it.";

$eligibleApplicants = "Students enrolled in their 3rd, 4th year or Master level of Economics/Finance studies 
  at a recognized Bulgarian University. Participants in previous Aleksander Foundation 
  3 day seminars and workshops are not eligible.";

$expired = true;

$imageHolderStyle = "imageholdercasino";

$image_prefix = "bankya10";
$alt = "Bankya";
$num_images = 35;
$num_images_per_row = 5;
$num_rows = 7;

$verticalImages = array(6, 16, 21);

$galleryCaption = "Bankya, 12th Nov - 14th Nov 2009";

$applicationRequirements = array(
  "Essay: \"Assume five years from now the developed world is faced with very high levels of inflation. Discuss impact on and strategies for a <strong>Bulgarian Bank OR Bulgarian Company (please pick only one)</strong> to protect their assets and operations. Use examples.\" Essay should be approximately 600 words.<br />",
  "Curriculum Vitae (CV) of maximum 2 pages."
);

$slogan = "The future is coming fast. Be prepared to back the right horse.";

include ("./php/template_workshop.php");

?>