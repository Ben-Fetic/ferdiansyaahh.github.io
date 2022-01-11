
<!DOCTYPE html>
<html>
<head>
	<title>PT INKA.com</title>
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="https://ferdiansyaahh.github.io/Demo/aku.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://ferdiansyaahh.github.io/Demo/all.min.css" crossorigin="anonymous">

</head>
<body>
	<div class="header">

		<div class="judul">
			<h1>Karyawan PT INKA</h1>
		</div>

	</div>
	<div class="sidebar">

		<div class="menu">
			
			<ul>
				<?php 
				{
					$home="";
					$user="";
					$barang="";
					$pelanggan="";
					$laporan="";
					$gp="";
				}


				 ?>
				<li <?php echo $home; ?>><a href="index.php?p=home"><i class="fas fa-tachometer-alt"></i> Beranda</a></li>

				<li <?php echo $user; ?>><a href="index.php?p=user"><i class="fa fa-user"></i> User</a></li>

				<li <?php echo $barang; ?>><a href="index.php?p=barang"><i class="fa fa-database"></i> Input Data Anda</a></li>

				<li <?php echo $pelanggan; ?>><a href="#"><i class="fa fa-clock"></i> Absensi</a></li>
				
				<li <?php echo $laporan; ?> id="lpr"><a href="#"><i class="fas fa-print"></i> Laporan</a></li>
				
				<li <?php echo $home; ?>><a href="#" onclick="return confirm('Yakin Ingin Logout ?')"><i class="fa fa-sign-out-alt"></i> Logout</a></li>

			</ul>
		</div>
	</div>
	<div class="content">
		<?php
			if ( empty($_GET['p']) ){
				echo "<script>document.location.href='index.php?p=home'</script>";
			}else{
				$p=$_GET['p'];
				include "https://ferdiansyaahh.github.io/content/$p.php";
			}
		 ?>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/transaksi.js"></script>
</body>
</html>
