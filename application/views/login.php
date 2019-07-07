<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kecerdasan Buatan | Login</title>
	<?php include 'application/views/komponen/css_head.php'; ?>
</head>
<body>
	<?php include 'application/views/komponen/navbar.php'; ?>
    <main class="container">
		<div class="row">
			<div class="col-md">
                <h3>LOGIN</h3>                
                <hr>
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">                        
                        <form action="<?php echo base_url(); ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" required>                       
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-unlock-alt"></i> Login</button>
                        </form>                        
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
			</div>
		</div>
	</main>
    <?php include 'application/views/komponen/js_body.php'; ?>
</body>
</html>