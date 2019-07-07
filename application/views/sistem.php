<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kecerdasan Buatan | Sistem Pakar</title>
	<?php include 'application/views/komponen/css_head.php'; ?>
</head>
<body>
	<?php include 'application/views/komponen/navbar.php'; ?>
    <main class="container">
		<div class="row">
            <div class="col-md-3">
            </div>
			<div class="col-md-6">
                <h3><i class="fas fa-stethoscope"></i> SISTEM PAKAR</h3>                
                <hr>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-3">                
                <?php 
                    if($this->session->flashdata('hasil'))
                    { 
                        echo "<div class='alert alert-primary' role='alert'>
                        <i class='fas fa-info-circle'></i> Hasil analisa kelayakan dari hewan kurban anda adalah:<br>
                        <h5>".strtoupper($this->session->flashdata('hasil'))."</h5></div>"; 
                    }
                ?>
            </div>
            <div class="col-md-6">
                <form class="" action="<?php echo base_url(); ?>home/proses" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlText">ID</label>
                        <input type="text" class="form-control" id="idID" name="formID" placeholder="diisi secara otomatis" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTanggal">Tanggal</label>
                        <?php 
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $year.'-'.$month.'-'.$day;
                        ?>
                        <input type="date" class="form-control" id="exampleFormControlTanggal" name="formTgl" value="<?php echo $today; ?>" required readonly>
                    </div> 
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Hewan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="formHewan">
                            <option value="sapi">Sapi</option>
                            <option value="kambing">Kambing</option>
                            <option value="domba">Domba</option>
                            <option value="unta">Unta</option>
                        </select>
                    </div>                    
                    <div class="form-group">
                        <label for="exampleFormControlUmur">Umur Hewan</label>
                        <input type="number" class="form-control" min="1" name="formUmur" placeholder="berdasarkan per bulan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCheckbox">Kondisi Hewan</label><br>
                        <div class="row">
                            <div class="col-md-4"><input type="checkbox" name="formKondisi[]" value="buta sebelah"> Buta sebelah</div>
                            <div class="col-md-4"><input type="checkbox" name="formKondisi[]" value="pincang kaki"> Pincang kaki</div>
                            <div class="col-md-4"><input type="checkbox" name="formKondisi[]" value="sakit parah"> Sakit parah</div>
                            <div class="col-md-4"><input type="checkbox" name="formKondisi[]" value="kuping terpotong"> Kuping terpotong</div>
                            <div class="col-md-4"><input type="checkbox" name="formKondisi[]" value="tanduk pecah"> Tanduk pecah</div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="idHasil" name="formHasil" placeholder="diisi secara otomatis" hidden>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-spinner"></i> Submit</button>
                </form>
            </div>
            <div class="col-md-3">
            </div>
		</div>
	</main>
    <?php include 'application/views/komponen/js_body.php'; ?>
</body>
</html>