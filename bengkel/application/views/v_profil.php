<title><?=$template; ?></title>
		<style type="text/css">
				table.data {
		border-collapse: collapse;
		align: center;
	}
	table{
		width: 20%;
		margin : -200px 8px 0 630px;
	}
	table.data th, table.data td {
		padding: 10px;
		align: center;
	}
</style>
			<table class="data" border="3">
				<tr style="background-color: red; color: white;">
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
				</tr>
				<?php
				foreach ($admin as $b => $row) { ?>
				<tr>
					<td><?=$row->nama_admin?></td>
					<td><?=$row->username?></td>
					<td><?=$row->password?></td>
				</tr>
			<?php
			} ?>
		</table>