<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$id=$_POST['id'];
	$nama_mahasiswa=$_POST['nama_mahasiswa'];
	$nim=$_POST['nim'];
	$program_studi=$_POST['program_studi'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$IPK=$_POST['IPK'];
	
	
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE mahasiswa SET id='$id',nama_mahasiswa='$nama_mahasiswa',nim='$nim',alamat_mhs='$alamat_mhs',program_studi='$program_studi',tgl_lahir='$tgl_lahir',IPK='$IPK'
	WHERE id=$id");

    header("Location: mahasiswa.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="style.css">
    <title>Edit Data Mahasiswa</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['id'];
	$nama_mahasiswa = $user_data['nama_mahasiswa'];
	$nim = $user_data['nim'];
	$program_studi = $user_data['program_studi'];
	$tgl_lahir = $user_data['tgl_lahir'];
	$IPK = $user_data['IPK'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="mahasiswa.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_mahasiswa.php">
		<table border="0">
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
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

	</form>
</body>
<?php include('footer.php');?>
</html>
