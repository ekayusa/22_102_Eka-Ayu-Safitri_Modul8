<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UTS PRAKTIKUM PBW EKA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="UTSPRAKTIKUMPBW.css">
    </head>
    <body>
        <nav class="navbar fixed-top" style="background-color:#49A1F2;" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PBW</a>
                <p class="up">Selamat Datang, Affan Maulana Zulkarnain</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Praktikum PBW A</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="UTSPRAKTIKUMPBW.php">Daftar Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" ">Informasi</a>
                            </li>
                        </ul>
                    </div>
                    <form class="container-fluid justify-content-start cntr">
                        <button class="btn btn-danger me-2 cntrr" type="button"><a href = "index.php">Logout</a></button>
                    </form>
                </div>
            </div>
        </nav>
        
        <br><br><br><br>
        <center>
            <h1 style="color: #5E5E5E;">DAFTAR MAHASISWA</h1>
            <h1 style="color: #5E5E5E;">PEMROGRAMAN BERBASIS WEB</h1>
        </center>
        <br><br>
        <button type="button" class="btn" style="background-color: #72FF70;"><a href="tambah.php">Tambah Data</a></button> <button type="button" class="btn" style="background-color: #FF4343;">Cetak Laporan <i class="bi bi-card-text"></i></button> 
        <div class="input-group flex-nowrap cari">
            <input type="text" class="form-control" placeholder="Cari Berdasarkan NIM" aria-label="Cari Berdasarkan NIM" aria-describedby="addon-wrapping">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
        </div>
        <center>
            <table>
                <br><br>
                <table class="table table-striped">
                    <thead style="background-color:rgb(126, 195, 251);">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ket</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
		                include 'koneksi.php';
		                $no = 1;
		                $data = mysqli_query($koneksi,"select * from datamhs");
		                while($d = mysqli_fetch_array($data)){
			                ?>
			                <tr>
				                <td><?php echo $no++; ?></td>
				                <td><?php echo $d['nim']; ?></td>
				                <td><?php echo $d['nama']; ?></td>
				                <td><?php echo $d['dosen']; ?></td>
				                <td><?php echo $d['status']; ?></td>
				                <td><?php echo $d['ket']; ?></td>
				                <td>
                                    <button type="button" class="btn" style="background-color: #87A9FF;"><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></button> 
                                    <button type="button" class="btn" style="background-color: #FF5E5E;"><a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></button>
				                </td>
			                </tr>
			                <?php 
		                }
		                ?>
                    </tbody>
                </table>
            </table>
        </center>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>