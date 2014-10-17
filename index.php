<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>KELOMPOK RPL BIOSKOP</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<div id="header"></div>
<div id="menu">
    <ul>
      <li><a href="index.php" id="aktif">Home</a></li>
      <li><a href="theater.php">Theater</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li>
	  
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent"><br>
	<?php
	include "./include/conn.php";
	include "./gallery.php";
	?>
	<br>
	<div id="teks"><h2><u>Sinopsis Film</u></h2>
	<table><tbody valign="top"><tr><td>
  <img src="./images/breaking.jpg"/ width="130" height="150"> </td><td>The Twilight Saga: Breaking Dawn - Bagian 1, Bella (Kristen Stewart) dan Edward (Robert Pattinson) serta orang-orang yang mereka cintai, harus berurusan dengan serangkaian konsekuensi atas pernikahan, bulan madu romantis, dan kelahiran anak-anak mereka....  menjadi peristiwa yang tak terduga dan mengejutkan bagi Jacob Black (Taylor Lautner)</td></tr><tr><td colspan="2">
Jenis Film 	: Drama/fantasy<br>
Produser 	: Stephenie Meyer, Wyck Godfrey, Karen Rosenfelt<br>
Produksi 	: Summit Entertainment<br>
Homepage 	:<a href="http://www.breakingdawn-themovie.com/worldoftwilight/" target="_blank">http://www.breakingdawn-themovie.com/worldoftwilight/</a><br>
Durasi 		: 117

  <br/><br/><h2></h2></td></tr></tbody></table>
</table>
</div>
</div>
<div id="rightcontent"><strong>Cari Di Website </strong><br/>
<form method="get" action="http://www.google.com/search" target="_blank">
<table align="left" cellpadding="0">
<tbody>
<tr>
<td nowrap="nowrap">
<input name="q" size="25" maxlength="255" value="" type="text">
</tr>
<tr>
<td align="left">
<input name="submit" value="Search" type="submit">
</td>
</tr>
</tbody>
</table>
</form>
<hr>	  
		<?php
		include "./login.html";
		?>
	  <hr/>	
	  <center><img src="./images/gundar.gif"/ width="170" height="200"><br/>
	  <i><font color="#666666" face="verdana"><strong>Powered By <br/>3 KA 01</strong></font></i></center>
	  <br/><br/>
</div>
<div id="clearer"></div>
<div id="footer">2011-SEKARANG Copyright 3KA01 UNIVERSITAS GUNADARMA. All Right Reserved </div>
</div>
</body>
</html>
