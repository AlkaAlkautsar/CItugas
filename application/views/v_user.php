<!DOCTYPE html>
<html>
<head>
	<title>Tugas CodeIgniter Alka</title>
</head>
<body>
	<h1>| Database Anggota Perpustakaan | </h1>
	<table border="1">
		<tr>
			<th>Nomor Anggota</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Jenis Anggota</th>
		</tr>
		<?php foreach($anggota as $u){ ?>
		<tr>
			<td><?php echo $u->nomor_anggota ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->tgl_lahir ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->jk ?></td>
      <td><?php echo $u->jenis_anggota ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
