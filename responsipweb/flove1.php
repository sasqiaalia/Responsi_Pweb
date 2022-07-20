<html>
	<head>
		<title>DATA PEMESANAN MAKANAN</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<style type="text/css">
			html {
				scroll-behavior: smooth;
				}
				body {
					font-family: sans-serif;
					font-size: 16px;
					background-color: pink;
				}

		</style>

	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">INFORMASI DATA PEMESANAN FLOWER BAKERY </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>No. Handphone</td>
						<td><input name="handphone" type="text" id="handphone"></td> </tr>
					</tr>

					<tr>
						<td>Menu Cake Yang Tersedia </td>
							<td>
								<select name="makanan" id="makanan">
								<option>CupCake</option>
								<option>Muffin</option>
								<option>Raspberry Cheesecake</option>
								<option></option>
								<option>Fudgy Chocolate Brownies</option>
								<option></option>
								<option>Bolu Pandan</option>
								<option>Banana Cake</option>
								<option>Rainbow Cake</option>
								<option>Red Velvet Cake</option>
								<option>Macaron</option>
								<option>Birthday Cake Custom</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Menu Minuman Yang Tersedia </td>
							<td>
								<select name="minuman" id="minuman">
								<option>Kombucha</option>
								<option>Leci Tea</option>
								
							</select>
						</td>
					</tr>

					<tr>
						<td>Reuquest Pemesanan</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<table>
			<tr>
				<td><img src="cupcake.jpg" width="120" height="100"></td>
				<td><img src="muffin.jpg" width="120" height="100"></td>
				<td><img src="rc.jpg" width="120" height="100"></td>
				<td><img src="fb.jpg" width="120" height="100"></td>
				<td><img src="bolupandan.jpg" width="120" height="100"></td>
				<td><img src="bn.jpg" width="120" height="100"></td>
				<td><img src="rv.jpg" width="120" height="100"></td>
				<td><img src="mc.jpg" width="120" height="100"></td>
				<td><img src="birthday.jpg" width="120" height="100"></td>
				<td><img src="kombucha.jpg" width="120" height="100"></td>
				<td><img src="leci.jpg" width="120" height="100"></td>
			</tr>
		</table>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Pesanan </a></strong></div>
	</body>
</html>