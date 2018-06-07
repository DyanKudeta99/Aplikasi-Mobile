<title><?=$header; ?></title>
<style type="text/css">
table.data {
		border-collapse: collapse;
		top: 10px;
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
		<table class="data" border="3" align="center" >
		<?php echo anchor('sparepart/tambahdata','+ Tambah Sparepart'); ?>
			<tr style="background-color: red; color: white;">
				<th>Kode Sparepart</th>
				<th>Nama Sparepart</th>
				<th>Harga Sparepart</th>
			</tr>
			<?php
			foreach ($sparepart as $b => $row) { ?>
				<tr style="font-size: 15px;">
					<td><?=$row->Kode_sparepart;?></td>
					<td><?=$row->Nama_sparepart;?></td>
					<td><?=$row->Harga_sparepart;?></td>
				</tr>
			<?php
			} ?>
		</table>