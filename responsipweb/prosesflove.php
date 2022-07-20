<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];

echo "<head><title>Informasi Data Pemesan Flower Bakery</title></head>";
$fp = fopen("pemesananflow.txt", "a+");
fputs($fp, "$nama|$alamat|$handphone|$makanan|$minuman\n");
fclose($fp);

echo "Love is when you have a really amazing piece of cake, and it’s the very last piece, but you let him have it.<br>";
echo "Enjoy your delicious cake.<br>";
echo "Have a good day, flove.<br>";
echo "<a href='tampilan.php'>Data Pemesanan Flower Bakery</a><br>";
echo "<a href='lihat.php'>Tampilan Data Pemesanan Flower Bakery </a><br>";

 ?>



