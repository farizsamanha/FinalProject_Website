<!DOCTYPE html>
<html>
<head>
	<title>Update Produk</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url();?>index.php/CRUD/update">
		Id : <br><input type="text" name="id" value="<?php echo $id ?>" readonly="$id"><br>
		Nama Produk: <br><input type="text" 	name="namaProduk" value="<?php echo $namaProduk ?>"><br>
		Harga Produk : <br><input type="text" 	name="hargaProduk" value="<?php echo $hargaProduk ?>"><br>
		Deskripsi : <br><input type="text" 		name="deskripsi" value="<?php echo $deskripsi ?>"><br>
		Upload : <br><input type="file" 		name="upload" value="<?php echo $upload ?>"><br>
		<br>
		<button type="submit">Update Produk</button>
	</form>

</body>
</html>
