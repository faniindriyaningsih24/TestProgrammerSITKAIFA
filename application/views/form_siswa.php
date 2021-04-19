<html>
<head>
	<title>Form||DataUser</title>
</head>
<body>

	<table border="1" width="100%" height="100%" textalign="center">
		<tr>
			<td colspan="3">"User : <?php echo $this->session->userdata("nama"); ?> "</td>
		</tr>
		<tr>
			<td><a href="<?= base_url('index.php/C_home/logout') ?>"><b>LOGOUT</b></a></td>
			<td><a href='<?php echo site_url('User/'); ?>'><b>USER</b></a></td>
			<td><a href='<?php echo site_url('Siswa/'); ?>'><b>SISWA</b></a></td>
		</tr>
		<tr height="90%">
			<td colspan="3">
		<h3  align="center">~ Form Input Data Siswa ~</h3>
		<form action="" method="post" align="center">
			<h3>Kode Siswa</h3>
			<input type="text" name="txt_kodesiswa" value="" placeholder="Kode Wajib Di Isi">

			<h3>Nama Siswa</h3>
			<input type="text" name="txt_namasiswa" value="">

			<h3>Tempat Lahir</h3>
			<input type="text" name="txt_tempatlahir" value="">

			<h3>Tanggal Lahir</h3>
			<input type="date" name="tanggal_lahir" value="">

			<h3>Alamat</h3>
			<input type="text" name="txt_alamat" value="">
		<br>
		<br>
			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			<a target="_blank" href="<?= base_url('index.php/LaporanDompdf') ?>">Print PDF</a>
		</form>	

		<table align="center" border="1">

			<th>Kode Siswa</th>
			<th>Nama Siswa</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>

			<?php
				if (!empty($siswa)) 
				{
					foreach ($siswa as $datasiswa) 
						{
							?>
			<tr>
			<td><?php echo $datasiswa->kd_siswa; ?></td>
			<td><?php echo $datasiswa->nama_siswa; ?></td>
			<td><?php echo $datasiswa->tempat_lahir; ?></td>
			<td><?php echo $datasiswa->tanggal_lahir; ?></td>
			<td><?php echo $datasiswa->alamat; ?></td>
			</tr>

			<?php
				}	
					}
			?>

		</table>
			
			</td>
		</tr>
		<tr>
			<td colspan="3"><strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights reserved.</td>
		</tr>
	</table>
</body>
</html>
