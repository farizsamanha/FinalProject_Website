<!DOCTYPE html>
<html>
<head>
	<title>Tambahkan Produk</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url();?>index.php/CRUD/addData" enctype="multipart/form-data">		
		Nama Produk : <br><input type="text" name="namaProduk"><br>
		Harga Produk : <br><input type="text" name="hargaProduk"><br>
		Deskripsi : <br><input type="text" name="deskripsi"><br>
		Upload Gambar : <br> <input type="file" name="upload"><br><br>
		<input type="submit" value="Tambahkan Produk">
	</form>
</body>
</html>
