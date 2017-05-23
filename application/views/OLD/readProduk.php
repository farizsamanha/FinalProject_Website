<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Deskripsi</th>
			<th>Gambar</th>
			<th>Aksi Edit</th>
			<th>Akse Delete</th>
			
		</tr>
		<?php foreach($dataProduk as $barang){ ?>
		<tr>
			<td><?php echo $barang['id']; ?></td>
			<td><?php echo $barang['namaProduk']; ?></td>
			<td><?php echo $barang['hargaProduk']; ?></td>
			<td><?php echo $barang['deskripsi']; ?></td>
			<td><img src="<?php echo base_url('upload/'.$barang['upload']); ?>" height='50' width='50'> </td>
			<td><a href="<?php echo base_url()."index.php/CRUD/getProduk/".$barang['id']; ?>">Edit</a> </td>	
			<td><a href="<?php echo base_url()."index.php/CRUD/delete/".$barang['id']; ?>">Delete</a> </td>
		</tr>
		<?php }?>
	</table>
		<br><br>
		<button><a href="<?php echo base_url()?>/index.php/CRUD/viewAddData">TAMBAH DATA</button>
</body>
</html>