<?php 

echo "<head><title>Informasi Data Pemesan Flower Bakery</title></head><body background-color:pink>";
$fp = fopen("pemesananflow.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>No. Handphone: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Menu Cake: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Minuman: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tampilan.php'> Tampilan Data Pemesanan Flower Bakery  </a></body>";

?>


    
    
    
    
    




