<title>Bukti Pembayaran</title>
		<style type="text/css">
				table.data {
		border-collapse: collapse;
		align: center;
	}
	table{
		width: 40%;
		margin : -300px 8px 0 400px;
	}
	table.data th, table.data td {
		padding: 10px;
		align: center;
	}
</style>
			<table class="data" border="3">
				<tr style="background-color: red; color: white;">
					<th>Kode</th>
					<th>Kode Service</th>
					<th>Tgl Service</th>
					<th>Kode Sparepart</th>
					<th>Nopol</th>
					<th>No Antrian</th>
					<th>Nama Customer</th>
					<th>Nama Admin</th>
					<th>Total</th>
					
				</tr>
				<?php
				foreach ($service as $b => $row) { ?>
				<tr>
					<td><?=$row->Kode?></td>
					<td><?=$row->Kode_service?></td>
					<td><?=$row->Tgl_service?></td>
					<td><?=$row->Kode_sparepart?></td>
					<td><?=$row->Nopol?></td>
					<td><?=$row->id_booking?></td>
					<td><?=$row->Id_user?></td>
					<td><?=$row->id_admin?></td>
					<td><?=$row->Total?></td>
					
				</tr>
				
			<?php
			} ?>
		</table>
				
		</p>