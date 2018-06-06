<title><?=$template; ?></title>
		<style type="text/css">
				table.data {
		border-collapse: collapse;
		align: center;
	}
	table{
		width: 50%;
		margin : -300px 8px 0 450px;
	}
	table.data th, table.data td {
		padding: 10px;
		align: center;
	}
</style>
			<table class="data" border="3">
				<tr style="background-color: red; color: white;">
					<th>ID</th>
					<th>No Antrian</th>
					<th>Nama Customer</th>
					<th>Tgl Booking</th>
					<th>Nopol</th>
				</tr>
				<?php
				foreach ($booking as $b => $row) { ?>
				<tr>
					<td><?=$row->id_booking?></td>
					<td><?=$row->no_antrian?></td>
					<td><?=$row->id_user?></td>
					<td><?=$row->tgl_booking?></td>
					<td><?=$row->Nopol?></td>
				</tr>
			<?php
			} ?>
		</table>
		</p>