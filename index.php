<?php
  $hostname = $_SERVER['HTTP_HOST'];
  $path = dirname($_SERVER['PHP_SELF']);

  if(isset($_REQUEST["fflash"]))
    header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index_flash.php');

  $datei_modul2 = "datum_modul2.dat";
  $fp_modul2 = fopen($datei_modul2, "r");

  $datei_modul1 = "datum_modul1.dat";
  $fp_modul1 = fopen($datei_modul1, "r");
?>

<html>
<head>
    <title>MLK-Vertretungsplan</title>
    <!--<meta http-equiv="refresh" content="310; URL=Blank.aspx" content=”width=570; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;”/>
    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1, user-scalable=yes" /> -->
    <link href="apple-touch-icon@60x60.png" rel="apple-touch-icon" />
    <link href="apple-touch-icon@76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="apple-touch-icon@120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="apple-touch-icon@152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <meta name="viewport" content="height=device-height, initial-scale=0.75, maximum-scale=0.75, user-scalable=yes" />
</head>

<style>
  @font-face {
      font-family: 'fonts';
      src: url('Walkway Bold.ttf');
      font-style: normal;
  }

  .text { 
    position: absolute;
    text-align: center; 
    font-size: 35;
    font-family: fonts;
    text-shadow: 1px 1px 1px #555;
    width: 100%;
  }
</style>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
<div class="text">
  <nobr><span style="text-align:center;"><h2>MLK-Vertretungsplan Online<sup>html</sup></h2></span></nobr>
  <table style="text-align: left; width:1200; height:800; margin-left: auto; margin-right: auto; margin-bottom: auto;" border="0" cellpadding="0" cellspacing="0">
  <!--<table border=0 bordercolor="#000000" cellpadding=0 cellspacing=0 width="1163" height="658">-->
    <tr>
			<td colspan="1" rowspan="1" width="585" height="800" style="border-color:#000000;border-width:2px;border-style:solid;">
        <iframe src="html/modul1.html" name="Vertretungsplan-Modul" scrolling="no" noresize frameborder=0  width="100%" height="100%" style="overflow: hidden;"></iframe> 
			</td>
			<td colspan="1" rowspan="1" width="585" height="800" style="border-color:#000000;border-width:2px;border-style:solid;border-left-style:none;">
    		<iframe src="html/modul2.html" name="Vertretungsplan-Modul 2" scrolling="no" noresize frameborder=0  width="100%" height="100%" style="overflow: hidden;"></iframe>
			</td>
       
		</tr>
     <caption align="bottom">
        <p>  
          <h3>
            <span style="text-align:left; margin-right:100px; vertical-align:middle;">Letztes Update (Modul1): <?php echo fgets($fp_modul1); ?></span>
            <span style="text-align:right; margin-left:100px; vertical-align:middle;">Letztes Update (Modul2): <?php echo fgets($fp_modul2); ?></span>
          </h3>
        </p>
          <form style"text-align:center">
            <input type="submit" name="fflash" value="Flash Version">
          </form>
      </caption>
	</table>
</div>
</body>
</html>