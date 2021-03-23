<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/download.jpg">
	<title>Laporan Keuntungan Harian</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<style type="text/css">
		table tr td,
		table tr th {
			font-size: 10pt;
		}
	</style>

	<style>
		.line-title {
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
	</style>

	<style>
		#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td,
		#customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#customers tr:hover {
			background-color: #ddd;
		}

		#customers th {
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>

<body>
	<img src="assets/img/logo.jpg" style="position: absolute; width: 100px; height: auto;">
	<table style="width: 105%;">
		<tr>
			<td align="center">
				<h1>Netly Ponsel</h1>
				<h3>Alamat : JL.Berkat Mufakat, Sebelah Gang Swarga, RT.12 RW.4, Liang Anggang, Banjarbaru</h3>
			</td>
		</tr>

	</table><br>
	<hr class="line-title">
	<p align="center">
		<strong>Keuntungan Harian</strong>
	</p>
	<p align="right">Banjarbaru,<?php echo date('d/m/Y'); ?></p>
	<table id="customers" class="table table-bordered">

		<thead>
			<tr align="center">
				<th>NO</th>
				<th>Tanggal</th>
				<th>Cabang</th>
				<th>Uang Kembali</th>
				<th>Hasil Pagi</th>
				<th>Hasil Sore</th>
				<th>Hasil Malam</th>
				<th>Total</th>
				<th>Lebihan</th>
				<th>Total Hari Ini</th>
				<th>Catatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($tb_keuntunganharian as $kh) : ?>
				<tr align="center">
					<td width="20px"><?php echo $no++ ?></td>
					<td><?php echo $kh->tanggal ?></td>
					<td><?php echo $kh->cabang ?></td>
					<td><?php echo number_format($kh->uang_kembali, 0, ',', '.'); ?></td>
					<td><?php echo number_format($kh->hsl_pagi, 0, ',', '.'); ?></td>
					<td><?php echo number_format($kh->hsl_sore, 0, ',', '.'); ?></td>
					<td><?php echo number_format($kh->hsl_malam, 0, ',', '.'); ?></td>
					<td><?php echo number_format($kh->total, 0, ',', '.'); ?></td>
					<td><?php echo number_format($kh->lebihan, 0, ',', '.'); ?></td>
					<td><?php echo number_format($kh->totalkeuntungan, 0, ',', '.'); ?></td>
					<td><?php echo $kh->catatan ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>



	<!-- page script -->
</body>

</html>