<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Riwayat Mahasiswa</h1>
        <h2>Universitas Pelita Bangsa </h2>
</header>
<div class="header">
    <div class="header-logo">Teknik Informatika</div>
</div>
<nav>
    <a href="index.php">Home</a>
    <a href="mahasiswa.php">Mahasiswa</a>
    <a href="riwayat.php">Riwayat</a>
    <button onClick="window.print();">Print</button>
</nav>
        <center><h2>Tabel Mahasiswa</a></h2>
        <a href="add_riwayat.php">TAMBAH DATA</a><br/><br/></center>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <th>ID RIWAYAT</th>
                <th>ID Mahasiswa</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>FAKULTAS</th>
                <th>TANGGAL LULUS</th>
                <th>IPK</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM riwayat';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_riwayat']?></td>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['nim']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['fakultas']?></td>
                        <td><?php echo $row['tanggal_lulus']?></td>
                        <td><?php echo $row['IPK']?></td>
                        <td><a href="edit_riwayat.php?id=<?= $row['id_riwayat']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_riwayat.php?id=<?= $row['id_riwayat']; ?>"><button>HAPUS</button></a></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
    </table>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Universitas Pelita Bangsa</p>
    </footer>
</body>
</html>