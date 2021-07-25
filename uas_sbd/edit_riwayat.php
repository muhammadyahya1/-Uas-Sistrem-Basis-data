<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_riwayat'];
	
	$id_riwayat = $_POST['id_riwayat'];
	$id = $_POST['id'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$fakultas = $_POST['fakultas'];
	$tanggal_lulus = $_POST['tanggal_lulus'];
	$IPK = $_POST['IPK'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE riwayat SET id_riwayat='$id_riwayat', id='$id',nim='$nim', nama='$nama', fakultas='$fakultas', tanggal_lulus='$tanggal_lulus',IPK='$IPK' 
	WHERE id_riwayat=$id");

    header("Location: riwayat.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="style.css">
    <title>Ubah Data </title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM riwayat WHERE id_riwayat=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_riwayat = $user_data['id_riwayat'];
	$id = $user_data['id'];
	$nim = $user_data['nim'];
	$nama = $user_data['nama'];
	$fakultas = $user_data['fakultas'];
	$tanggal_lulus = $user_data['tanggal_lulus'];
	$IPK = $user_data['IPK'];
}	
?>

<?php include('header1.php');?>
 
<body>
	<a href="riwayat.php">KEMBALI </a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_riwayat.php">
		<table border="0">
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
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Fakultas</td>
				<td><input type="text" name="fakultas"></td>
			</tr>
			<tr> 
				<td>Tanggal Lulus</td>
				<td><input type="text" name="tanggal_lulus"></td>
			</tr>
			<tr> 
				<td>IPK</td>
				<td><input type="text" name="IPK"></td>
			</tr>
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
