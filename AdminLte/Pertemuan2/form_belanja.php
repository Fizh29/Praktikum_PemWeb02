<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h1>
				Belanja Online
			</h1>
			<form method="POST" action="form_belanja.php">
			<div class="form-group row">
				<label for="customer" class="col-4 col-form-label">Customer</label> 
				<div class="col-8">
				<div class="input-group">
					<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fa fa-address-card"></i>
					</div>
					</div> 
					<input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
				</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4">Pilih Produk</label> 
				<div class="col-8">
				<div class="custom-control custom-radio custom-control-inline">
					<input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
					<label for="produk_0" class="custom-control-label">TV</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
					<label for="produk_1" class="custom-control-label">KULKAS</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
					<label for="produk_2" class="custom-control-label">MESIN CUCI</label>
				</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
				<div class="col-8">
				<input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
				</div>
			</div> 
			<div class="form-group row">
				<div class="offset-4 col-8">
				<input name="proses" type="submit" class="btn btn-primary" value="Kirim">
				</div>
			</div>
		</form>
		</div>



		<div class="col-md-6">
			<table class="table table-sm table-bordered">
				<tbody>
					
					<tr class="table-primary">
						<td>
						Daftar Harga
						</td>
					</tr>
					<tr class="table">
						<td>
							TV = 4.200.000
						</td>
					</tr>
					<tr class="table">
						<td>
							Kulkas = 3.100.000
						</td>
					</tr>
					<tr class="table">
						<td>
							Mesin Cuci = 3.800.000
						</td>
					</tr>
					<tr class="table-primary">
						<td>
						Harga dapat berubah setiap saat
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
$submit = $_POST['proses'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

echo 'Nama = '.$customer;
echo '<br> Produk = '.$produk;
echo '<br> Jumlah = '. $jumlah;

if ($produk == "TV"){
	$total = $jumlah * 4200000;
	echo '<br> Total Belanja anda = Rp '.$total;
} elseif ($produk == "Kulkas"){
	$total = $jumlah * 3100000;
	echo '<br> Total Belanja anda = Rp '.$total;
} elseif ($produk == "Mesin Cuci"){
	$total = $jumlah * 3800000;
	echo '<br> Total Belanja anda = Rp '.$total;
}
?>
</body>
</html>