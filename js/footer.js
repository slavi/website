document.write("<br style=\"clear:both;\" />");
document.write("<div class=\"myfooter\" >");
document.write("<div style=\"position:relative;height:56px;width:100%;\"></div>");
document.write("<div id=\"copyright\">&copy; 2005-2010 The Aleksander Foundation. All Rights Reserved.");
document.write("</div>");
document.write("</div>");

// Copy-pasted from Googel Analytics
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

try {
    var pageTracker = _gat._getTracker("UA-2077028-2");
    pageTracker._trackPageview();
} catch(err) {
}

      