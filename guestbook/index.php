<html>
<body>
<h3 align="left"><u>GUEST BOOK</u></h3>
<form method="post" action="proses.php">
<table align="center">
<tr><td>Nama:</td><td><input type="text" name="nama"></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email"></td></tr>
<tr><td colspan="2">Pesan dan Kesan:<br><textarea name="isi" cols="50" rows="10"></textarea></td></tr>
<tr><td colspan="2">Bagaimana tampilan website ini menurut Anda?<br>
<input type="radio" name="po1" value="Baik Sekali">Baik Sekali<br>
<input type="radio" name="po1" value="Baik">Baik<br>
<input type="radio" name="po1" value="Jelek">Jelek<br>
<input type="radio" name="po1" value="Jelek Sekali">Jelek Sekali<br>
</td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Simpan"><input type="reset" value="Batal"></td></tr>
</table>
</form>
<a href="tampil.php">Lihat isi</a>
</body>
</html>