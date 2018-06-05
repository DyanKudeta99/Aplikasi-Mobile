<title><?=$template; ?></title>
		<style type="text/css">
				table.data {
		border-collapse: collapse;
		align: center;
	}
	table{
		width: 20%;
		margin : -300px 8px 0 630px;
	}
	table.data th, table.data td {
		padding: 10px;
		align: center;
	}
</style>
			<table class="data" border="3">
				<tr style="background-color: red; color: white;">
					<th>Id mekanik</th>
					<th>Nama mekanik</th>
				</tr>
				<?php
				foreach ($mekanik as $b => $row) { ?>
				<tr>
					<td><?=$row->id_mekanik?></td>
					<td><?=$row->nama_mekanik?></td>
				</tr>
			<?php
			} ?>
		</table>
		</p>