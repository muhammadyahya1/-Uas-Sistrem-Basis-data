<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Data Mahasiswa</h1>
        <h2>Universitas Pelita Bangsa</h2>
</header>
<div class="header">
    <div class="header-logo">Teknik Informatika</div>
</div>
<nav>
    <a href="index.php">HOME</a>
    <a href="mahasiswa.php">MAHASISWA</a>
    <a href="riwayat.php">RIWAYAT</a>
    <a href="logout.php">LOG OUT</a>
    <button onClick="window.print();">PRINT</button>
</nav>
<center><h2>Tabel Mahasiswa</a></h2>
      <br><a href="add_mahasiswa.php">TAMBAH DATA BARU</a><br/><br/>
        <table border="1" cellpadding="5" cellspacing="0"></center>
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>ALAMAT</th>
                    <th>PROGRAM STUDI</th>
                    <th>TANGGAL LAHIR</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM mahasiswa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['nama_mahasiswa']?></td>
                        <td><?php echo $row['nim']?></td>
                        <td><?php echo $row['alamat_mhs']?></td>
                        <td><?php echo $row['program_studi']?></td>
                        <td><?php echo $row['tgl_lahir']?></td>
                        <td><?php echo $row['IPK']?></td>
                        <td><a href="edit_mahasiswa.php?id=<?= $row['id']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_mahasiswa.php?id=<?= $row['id']; ?>"><button>HAPUS</button></a></td>
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