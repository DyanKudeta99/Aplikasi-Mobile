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
		<?php echo anchor('Mekanik/tambahdata','+ Tambah Mekanik');
		?>
		<table class="data" border="3" align="center" >
				<tr style="background-color: red; color: white;">
					<th>Id mekanik</th>
					<th>Nama mekanik</th>
					<th>Contact Person</th>
				</tr>
				<?php
				foreach ($mekanik as $b => $row) { ?>
				<tr>
					<td><?=$row->id_mekanik?></td>
					<td><?=$row->nama_mekanik?></td>
					<td><?=$row->cp?></td>
				</tr>
			<?php
			} ?>
		</table>