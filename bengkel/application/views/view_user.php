<title><?=$header; ?></title>
		<style type="text/css">
		table.data {
		border-collapse: collapse;
	}
	table{
		width: 40%;
		margin : auto;
		margin-top : 5%;
	}
	table.data th, table.data td {
		padding: 10px;
		align: center;
	}
	table.data td{
	background-color : white;
	}
</style>
			<table class="data" border="3" align="center">
				<tr style="background-color: red; color: white;">
					<th>Id User</th>
					<th>Nama User</th>
					<th>Email</th>
					<th>Password</th>
					<th>Telepon</th>
					<th>Alamat</th>
				</tr>
				<?php
				foreach ($user as $b => $row) { ?>
				<tr>
					<td><?=$row->Id_user;?></td>
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