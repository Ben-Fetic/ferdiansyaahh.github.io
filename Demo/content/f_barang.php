<div class="judul-content">
	<h1>Input Data</h1>
</div>
<div class="isi-content">
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input type="text" name="nama" class="text" autocomplete="off" required=""></td>
			</tr>


			<tr>
				<td><label for="#">Jenis Kelamin</label></td>
			</tr>
			<tr>
				<td>
					<select name="id_jenis" class="text" id="jns">
						<option value="" disabled selected>Pilih Jenis Kelamin</option>
						<option>***Laki-Laki***</option>
						<option>***Perempuan***</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="jns">No.NPWP</label></td>
			</tr>
			<tr>
				<td><input type="text" name="no" class="text" autocomplete="off" required=""></td>
			</tr>
			<tr>
				<td><label for="hrg">Status Pernikahan</label></td>
			</tr>
			<tr>
				<td><input type="text" name="status" class="text" autocomplete="off" required=""></td>
			</tr>


			<tr>
				<td><label for="stok">No.Identitas</label></td>
			</tr>
			<tr>
				<td><input type="text" name="noid" class="text" autocomplete="off" required=""></td>
			</tr>

			<tr>
				<td><label for="exp">Agama</label></td>
			</tr>
			<tr>
				<td><input type="text" name="agama" class="text" autocomplete="off" required=""></td>
			</tr>
			<td><label for="exp">Jabatan</label></td>
			</tr>
			<tr>
				<td><input type="text" name="jabatan" class="text" autocomplete="off" required=""></td>
			</tr>
			<td><label for="exp">Tempat Lahir</label></td>
			</tr>
			<tr>
				<td><input type="text" name="tempat" class="text" autocomplete="off" required=""></td>
			</tr>
			<td><label for="exp">Tanggal Lahir</label></td>
			</tr>
			<tr>
				<td><input type="date" name="tl" class="text" required="" id="exp" value="<?php echo $tampilnya['expired']; ?>"></td>
			</tr>
			<td><label for="exp">Alamat Saat Ini</label></td>
			</tr>
			<tr>
				<td><input type="text" name="alamat" class="text" autocomplete="off" required=""></td>
			</tr>
			<td><label for="exp">Nama Ayah</label></td>
			</tr>
			<tr>
				<td><input type="text" name="ayah" class="text" autocomplete="off" required=""></td>
			</tr>
			<td><label for="exp">Nama Ibu</label></td>
			</tr>
			<tr>
				<td><input type="text" name="ibu" class="text" autocomplete="off" required=""></td>
			</tr>
			<td><label for="exp">Contact</label></td>
			</tr>
			<tr>
				<td><input type="text" name="kontak" class="text" autocomplete="off" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="#" value="Simpan" class="simpan" required=""></td>
			</tr>


		</table>
	</form>
</div>


