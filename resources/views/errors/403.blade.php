<!DOCTYPE html>
<html>
<head>
	<title>No access</title>
	<link href="https://font.googleapis.com/css?family=Source+sans+Pro:300"  rel="stylesheet" type="text/css">

	<style>
		html, body{
			height: 100%;
		}
		body{
			margin: 0;
			padding: 0;
			width: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 300;
			font-family: 'Source Sans Pro';
		}
		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.title{
			font-size: 72px;
			margin-bottom: 40px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="content">
		<div class="title">:(</div>
			<p>Maaf, Anda Tidak Memiliki Akses Untuk Fitur Ini</p>
			<p><a href=" {{ url('/') }} ">Kembali Ke Halaman Awal</a></p>
	</div>
</div>
</body>
</html>