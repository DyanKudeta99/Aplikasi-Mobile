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

</div>
			<table class="data" border="3">
			<form action="<?=site_url('cetak/index');?>" method="POST" align="center">
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
					<th>Nama Mekanik</th>
					<th>Cetak</th>
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
					<td><select class="form-control" name="nama_mekanik">
					<option  value="">-Pilih Mekanik-</option>                    
					<?php foreach($get_nama_mekanik as $row) { ?>
					<option value="<?php echo $row->nama_mekanik;?>"><?php echo $row->nama_mekanik;?></option> <?php } ?> </select> </td>
					<td><input type="submit" value="Cetak"></td>
					
				</tr>
				
			<?php
			} ?>
		</table>
				
		</p>