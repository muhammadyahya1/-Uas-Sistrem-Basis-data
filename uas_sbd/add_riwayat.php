<?php include('header.php');?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="style.css">
    <title>RIWAYAT MAHASISWA</title>
</head> 

<body>
	<a href="riwayat.php">KEMBALI </a>
	<br/><br/>
 
	<form action="add_riwayat.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id_riwayat</td>
				<td><input type="text" name="id_riwayat"></td>
			</tr>
			<tr> 
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</td>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</td>
			<tr> 
				<td>Fakultas</td>
				<td><input type="text" name="fakultas"></td>
			</tr>
			<tr> 
				<td>Tanggal lulus</td>
				<td><input type="text" name="tanggal_lulus"></td>
			</tr>
			<tr> 
				<td>IPK</td>
				<td><input type="text" name="IPK"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="INPUT"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_riwayat = $_POST['id_riwayat'];
		$id = $_POST['id'];
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$fakultas = $_POST['fakultas'];
		$tanggal_lulus = $_POST['tanggal_lulus'];
		$IPK = $_POST['IPK'];

		include("koneksi.php");
				
		$result = mysqli_query($conn, "INSERT INTO riwayat(id_riwayat,id,nim,nama,fakultas,tanggal_lulus,IPK) 
        VALUES('$id_riwayat','$id','$nim','$nama','$fakultas','$tanggal_lulus','$IPK')");
		
		echo "Data Berhasil Ditambahkan. <a href='riwayat.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>
