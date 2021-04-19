<html>
<head>
	<title>HOME</title>
	
</head>
<body>
	<table border="1" width="100%" height="100%" align="center">
		<tr>
			<td colspan="3">"User : <?php echo $this->session->userdata("nama"); ?> "</td>
		</tr>
		<tr>
			<td><a href="<?= base_url('index.php/C_home/logout') ?>"><b>LOGOUT</b></a></td>
			<td><a href='<?php echo site_url('User/'); ?>'><b>USER</b></a></td>
			<td><a href='<?php echo site_url('Siswa/'); ?>'><b>SISWA</b></a></td>
		</tr>
		<tr height="90%">
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"><strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights reserved.</td>
		</tr>
	</table>
</body>
</html>
