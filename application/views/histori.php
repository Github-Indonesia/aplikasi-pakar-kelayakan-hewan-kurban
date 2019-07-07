<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kecerdasan Buatan | History</title>
	<?php include 'application/views/komponen/css_head.php'; ?>
</head>
<body>
	<?php include 'application/views/komponen/navbar.php'; ?>
    <main class="container">
		<div class="row">
			<div class="col-md">
			</div>
			<div class="col-md-12">
                <h3><i class="fas fa-file-medical-alt"></i> HISTORY</h3>                
                <hr>                
				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>NO.</th>
								<th>ID</th>
								<th>Tanggal</th>
								<th>Jenis Hewan</th>
								<th>Umur Hewan (bulan)</th>
								<th>Kondisi Hewan</th>
								<th>Hasil</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = $this->uri->segment('3') + 1;
							foreach($history as $baris){
							?>
							<tr>
								<td align="right"><?php echo $no++; ?></td>
								<td><?php echo $baris->id_history ?></td>
								<td><?php echo $baris->tgl_history ?></td>
								<td><?php echo $baris->jenis_hewan ?></td>
								<td><?php echo $baris->umur_hewan ?></td>
								<td><?php echo $baris->kondisi_hewan ?></td>
								<td><?php echo $baris->hasil ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
					<div class="row">
						<div class="col-md-2">
							<strong><?php echo number_format($this->sistem_model->jumlah_data_histori(),0,",","."); ?></strong> record(s) yang ditampilkan.
						</div>
						<div class="col-md-8">
							<?php echo $this->pagination->create_links(); ?> 
						</div>
						<div class="col-md-2">
							Page rendered in <strong>{elapsed_time}</strong> seconds.
						</div>
					</div>
					<div class="row">
						<div class="col">
							<small>* null = kosong/tidak dipilih semua</small>
						</div>
					</div>
			</div>
			<div class="col-md">
			</div>
		</div>
	</main>
    <?php include 'application/views/komponen/js_body.php'; ?>
</body>
</html>