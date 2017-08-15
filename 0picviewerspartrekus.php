<!DOCTYPE html>
<html>
<head>
<style>
img.normal {
    width: auto;
}

img.big {
    width: 90%;
}

img.small {
    width: 10%;
}
</style>
</head>
<body>







<hr style="width: 100%; height: 2px;">

<div style="text-align: center;">
<span style="font-weight: bold;">

<br>
JPEG / JPG and File Pictures-Viewer, PHP coded by Spartrekus <br>
<br>

<hr style="width: 100%; height: 2px;"><br>
<div style="text-align: center;">
<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	
          	$infofile=date("d.m.Y - H:m",filectime($file));
          	$thelist .= "<img class=\"big\" src=\"" . $file ."\" ><br><br> "  ;

 // <img class="big" src="logocss.gif" width="95" height="84"><br>


          }
       }
  closedir($handle);
  }
?>
<P>List of files:</p>
<P><?=$thelist?></p>

<IMG SRC="nscape/qc2.jpg" ALT="holiday_kitty">
</div>
</span>

<br>
<br>
<hr style="width: 100%; height: 2px;">
<br>


Return to homepage: 
</span><a href="http://freebsd.org/"><span style="font-weight: bold;">http://freebsd.org/</span></a>
 

<br>
<p ALIGN="CENTER">
<a href="http://www.freebsd.org/"><img style="width: 125px; height: 55px;" alt="debian"  BORDER="0">
</a></p>
<br>





</body>
</html>

