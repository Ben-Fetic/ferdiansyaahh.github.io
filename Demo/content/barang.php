<?php 
	include "system/proses.php";

 ?>


<div class="judul-content">
	<h1>Input Data Anda</h1>
</div>
<div class="isi-content">
	<a href="index.php?p=f_barang" class="link-tambah-barang">Tambah</a>
	<div class="judul-home">
		<div class="divtabel">
		<table class="tabel98">
			<tr>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>No. NPWP</th>
				<th>Status Pernikahan</th>
				<th>No. Identitas (KTP, SIM, Paspor)</th>
				<th>Agama</th>
				<th>Jabatan</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Alamat Saat Ini</th>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
				<th>Contact</th>
				<th>Action</th>
				
			</tr>

			<tr>
				<td>Agus</td>
				<td>Laki - Laki</td>	
				<td> - </td>
				<td>Belum Menikah</td>
				<td> - </td>
				<td>Islam</td>
				<td>Karyawan</td>
				<td>Ngawi, 24 Agustus 1995</td>
				<td>Ngawi</td>
				<td>Suro</td>
				<td>Sari</td>
				<td>085723453211</td>
				<td>
					<a href="#" class="btn btn-merah" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><i class="fa fa-trash-alt"></i> Hapus</a>

					<br/>
					<br/>
					<a href="#" class="btn btn-kuning"><i class="fa fa-pen"></i> Edit</a>
				</td>
			</tr>
		</table>
		</div>
	</div>
</div>