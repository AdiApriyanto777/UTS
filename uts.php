<html>
<head>
	<title> UTS PEMROGRAMAN WEB2</title>
</head>
<body>
<table align="center" border="1" cellspacing="1" cellpadding="1" 
height="600" width="500" bgcolor="yellow">
	<td>
<br>
<form action="output.html"method="post">
	<table align="center">
<center>
<h2> Data Pemantauan Covid - 19 </h2>
<tr>
	<td>Nama Wilayah</td>	
		<td>: <select name="wilayah">  
		<option value="">=Pilih Wilayah=</option>   
		<option value="Jakarta ">DKI Jakarta</option>  
		<option value="Jabar">Jawa Barat</option>    
		<option value="Banten">Banten</option> 
		<option value="Jateng">Jawa Tengah</option> 
		</select></td>
</tr>

<tr>
	<td>Jumlah Positif</td>
	<td>: <input type="text" size="8" name="positiv"></td>
</tr>

<tr>
	<td>Jumlah Dirawat</td>
	<td>: <input type="text" size="8" name="dirawat"></td>
</tr>

<tr>
	<td>Jumlah Sembuh</td>
	<td>: <input type="text" size="8" name="sembuh"></td>
</tr>

<tr>
	<td>Jumlah Meninggal</td>
	<td>: <input type="text" size="8" name="meninggal"></td>
</tr>

<tr>
	<td>Nama Operator</td>
	<td>: <input type="text" size="8" name="operator"></td>
</tr>

<tr>
	<td>Nama Mahasiswa</td>
	<td>: <input type="text" size="8" name="mahasiswa"></td>
</tr>

<tr>

<td>
<td colspan="2">
	<input type="submit" size="8" name="simpan" value="SIMPAN">
	<input type="reset" size="8" name="Batal" value="BATAL">
</td>

</tr>
<br>
</center>
</form>    		
</body>
</html>