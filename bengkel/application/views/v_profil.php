
		<style type="text/css">
				table.data {
		border-collapse: collapse;
		align: center;
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