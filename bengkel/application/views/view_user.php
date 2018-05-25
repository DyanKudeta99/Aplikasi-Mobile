<title><?=$header; ?></title>
		<style type="text/css">
		table.data {
		border-collapse: collapse;
	}
	table.data th, table.data td {
		padding: 5px;
	}
		body{
	background: url(assets/images/honda.jpg);
}
</style>
			<p><h3 align="center">Daftar User</h3></p>
			<p align="center">
				<table class="data" border="1">
				<tr>
					<th>Id User</th>
					<th>Foto</th>
					<th>Nama User</th>
					<th>Email</th>
					<th>Password</th>
					<th>Telepon</th>
					<th>Alamat</th>
				</tr>
				<?php
				$no= 1 ;
				foreach ($user as $b => $row) { ?>
				<tr>
					<td><?=$no++;?></td>
					<td><?=$row->Foto;?></td>
					<td><?=$row->Nama_user;?></td>
					<td><?=$row->Email;?></td>
					<td><?=$row->Password;?></td>
					<td><?=$row->Telp;?></td>
					<td><?=$row->Alamat;?></td>
				</tr>
				<?php
			} ?>
		</table>
		</p>