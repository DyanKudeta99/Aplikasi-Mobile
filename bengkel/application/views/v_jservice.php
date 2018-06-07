<title><?=$template; ?></title>
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
			<?php echo anchor('jservice/tambahdata','+ Tambah Data Service'); ?>
			<table class="data" border="3">
				<tr style="background-color: red; color: white;">
					<th>Kode Service</th>
					<th>Jenis Service</th>
					<th>Harga Service</th>
				</tr>
				<?php
				foreach ($harga_service as $b => $row) { ?>
				<tr>
					<td><?=$row->Kode_service?></td>
					<td><?=$row->Jenis_service?></td>
					<td><?=$row->Harga_service?></td>
					
				</tr>
				
			<?php
			} ?>
		</table>