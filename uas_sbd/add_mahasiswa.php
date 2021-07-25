<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" href="style.css">
</head> 

<body>
	<a href="mahasiswa.php">KEMBALI </a>
	<br/><br/>
 
	<form action="add_mahasiswa.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama_mahasiswa"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_mhs"></td>
			</tr>
			<tr>
				<td>Program studi</td>
				<td><input type="text" name="program_studi"></td>
			</tr> 
			<tr>
				<td>Tanggal Lahir </td>
				<td><input type="text" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>IPK</td>
				<td><input type="text" name="IPK"></td>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="INPUT"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$nama_mahasiswa = $_POST['nama_mahasiswa'];
		$nim = $_POST['nim'];
        $alamat_mhs = $_POST['alamat_mhs'];
		$program_studi = $_POST['program_studi'];
		$tgl_lahir = $_POST['tgl_lahir'];
        $IPK = $_POST['IPK'];
		include("koneksi.php");
		
		$result = mysqli_query($conn, "INSERT INTO mahasiswa(id,nama_mahasiswa,nim,alamat_mhs,program_studi,tgl_lahir,IPK) 
		VALUES('$id','$nama_mahasiswa','$nim','$alamat_mhs','$program_studi','$tgl_lahir','$IPK')");
		
		echo "Data Berhasil Ditambahkan. <a href='riwayat.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>
