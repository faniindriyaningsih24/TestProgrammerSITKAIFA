<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan data</title>
</head>
<body>
	<h3><center>DAFTAR SISWA</center></h3>
	<table border="1" cellspacing="0" cellpadding="5" width="100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama siswa</th>
				<th>Tempat lahir</th>
				<th>Tgl Lahir</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=0;
			foreach ($siswa as $datasiswa) {
				$no++;
				echo "<tr>";
					echo "<td><center>".$no."</center></td>";
					echo "<td>".$datasiswa->nama_siswa."</td>";
					echo "<td>".$datasiswa->tempat_lahir."</td>";
					echo "<td>".$datasiswa->tanggal_lahir."</td>";
					echo "<td>".$datasiswa->alamat."</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>