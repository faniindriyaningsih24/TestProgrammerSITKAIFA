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
		<h3  align="center">~ Form Input Data User ~</h3>
		<form action="" method="post" align="center">
			<h3>Kode User</h3>
			<input type="text" name="txt_kodeuser" value="" placeholder="Kode Otomatis">

			<h3>Nama User</h3>
			<input type="text" name="txt_namauser" value="">

			<h3>Username</h3>
			<input type="text" name="txt_username" value="">

			<h3>Password</h3>
			<input type="text" name="txt_password" value="">

			<?php
				$query = $this->db->get('t_status');
				$data = $query->result();
			?>
			<h3>Status</h3>
			<select name='cmb_status'>
				<option value=''>----Pilih Status----</option>
			<?php
				foreach($data as $row){?>
				<option value='<?php echo $row->kd_status;?>'><?php echo $row->status;?></option>
			<?php } ?>
			</select>
		<br>
		<br>
			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			
		</form>	

		<table align="center" border="1">

			<th>Kode User</th>
			<th>Nama user</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>

			<?php
				if (!empty($user)) 
				{
					foreach ($user as $datauser) 
						{
							?>
			<tr>
			<td><?php echo $datauser->kd_user; ?></td>
			<td><?php echo $datauser->namauser; ?></td>
			<td><?php echo $datauser->username; ?></td>
			<td><?php echo $datauser->password; ?></td>
			<td><?php echo $datauser->status; ?></td>
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
