<title>Bukti Pembayaran</title>
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
			<form action="<?=site_url('service/index');?>" method="POST" align="center">
				<tr style="background-color: red; color: white;">
					<th>Kode</th>
					<th>Kode Service</th>
					<th>Tgl Service</th>
					<th>No Antrian</th>
					<th>Jenis Service</th>
					<th>Harga</th>
					<th>Nama Sparepart</th>
					<th>Harga Sparepart</th>
					<th>Nama Customer</th>
					<th>Nopol</th>
					<th>Nama Admin</th>
					<th>Nama Mekanik</th>
					<th>Total</th>
					<th></th>
					<th></th>
				</tr>
				<?php
				foreach ($get_service as $b => $row) { ?>
				<tr>
					<td><?=$row->Kode?></td>
					<td><?=$row->Kode_service?></td>
					<td><?=$row->Tgl_service?></td>
					<td><?=$row->id_booking?></td>
					<td><?=$row->Jenis_service?></td>
					<td><?=$row->Harga_service?></td>
					<td><?=$row->Nama_sparepart?></td>
					<td><?=$row->Harga_sparepart?></td>
					<td><?=$row->Nama_user?></td>
					<td><?=$row->Nopol?></td>
					<td><?=$row->nama_admin?></td>
					<td><?=$row->nama_mekanik?></td>
					<td><?=$row->Total?></td>
					<form method="get" action="<? echo base_url().'service/edit/'.$row->id;?>"></form>
					<td><input type="submit" name="edit" value="Edit"></input></td>
					<form method="get" action="<? echo base_url().'cetak/index'.$row->Kode;?>"></form>
					<td><input type="submit" value="Cetak"></input></td>
					
				</tr>
				
			<?php
			} ?>
		</table>
				
		</p>