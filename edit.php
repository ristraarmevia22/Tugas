<html>
	<head>
		<title>EDIT DATA BARANG</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
	<H2> EDIT DATA BARANG </H2>
	
	<?php 
	include("connect.php");
	$id = $_GET['id'];
	$query_mysql = mysql_query("select * from barang where id='$id'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	
		<form action="update.php" method="post" p align="center">
		<table  width=40% height=10%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td> <b> Edit Data Barang </b></td>
			</tr>
			</table>
		<table  width=40% height=40%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td width=20%> Kode :  </td> 
				<td><input  class="t" type="text" name="kode" readonly value="<?php echo $data['kode'] ?>"></td>
			</tr>
			<tr>
				<td>Nama : </td> 
				<td><input class="t" type="text" name="nama" value="<?php echo $data['nama'] ?>"></td> 
			</tr>
			<tr>
				<td>Deskripsi: </td> 
				<td><textarea class="t" name="deskripsi"><?php echo $data['deskripsi'] ?></textarea></td> 
			</tr>
			<tr>
				<td>Stok: </td> 
				<td><input class="t" type="text" name="stok" value="<?php echo $data['stok'] ?>"></td> 
			</tr>
			<tr>
				<td>Harga: </td> 
				<td><input class="t" type="text" name="harga" value="<?php echo $data['harga'] ?>"></td> 
			</tr>
			<tr>
				<td>Berat: </td> 
				<td><input class="t" type="text" name="berat" value="<?php echo $data['berat'] ?>"><i>gram</i></td> 
			</tr>
			<tr>
				<td colspan="2" p align="center" height=10%> <input class="button" type=submit value="Update"></td>
			</tr>
			</form>
		</table>
		<?php
			}
		?>
	</body>
</html>