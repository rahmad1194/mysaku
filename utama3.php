<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1.0">
	<title>My Saku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		body {
			background: #407bff;
			margin: 0;
			padding: 0;
			color: white;
		}
		.banner img {
			width: 100%;
		}
		.text-heading {
			font-size: 20px;
		}
		.btn-white {
			background-color: white;
			color: #407bff;
			font-size: 15pt;
    		border-radius: 10px;
    		box-shadow: 2px 2px 2px rgb(136 136 136 / 95%);
    		padding: 10px;
		}
		.bottom img {
			position: fixed;
		    width: 100%;
		    bottom: 0px;
		}
	</style>
	<style type="text/css">
		@font-face{
		    font-family:"kayak-sans-regular";
		    src:url("Kayak Sans Regular.otf") format("woff"),
		    url("Kayak Sans Regular.otf") format("opentype"),
		    url("Kayak Sans Regular.otf") format("truetype");
		}
		.body {
			font-family:"kayak-sans-regular";
			text-transform:none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="banner">
				<img src="background/banner-3.png" alt="">
			</div>
		</div>
		<br>
		<div class="row">
			<!-- <div class="col-1"></div> -->
			<div class="col-12 text-heading">
				<center>Masukan Nomor Telepon<br></center>
			<br>
			</div>
			<!-- <div class="col-1"></div> -->
		</div>
		<div class="row">
			<div class="col-1"></div>
			<input type="number" name="pone" class="btn btn-white col-10">
			<div class="col-1"></div>
		</div><br>

		<div class="row">
			<div class="col-1"></div>
			<button class="btn btn-white col-10"><a href="utama4.php">Masuk Sekarang</a> <br></button>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="bottom">
				<img src="background/bottom.png" alt="">
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>