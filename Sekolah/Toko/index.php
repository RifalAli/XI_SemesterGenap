<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "dbtoko";
$koneksi = new mysqli($host, $user, $password, $db);

// Barang

$sql = "SELECT * FROM barang";
$hasil = mysqli_query($koneksi, $sql);

var_dump($hasil);
echo "<br>";

echo "<table border=1px>
<thead>
<tr>
<th>BARANG</th>
<th>HARGA</th>
<th>STOK</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>". $row[2] ."</td>";
    echo "<td>". $row[3] ."</td>";
    echo "</tr>";
}
echo "</tbody></table>";

// Pelanggan

$sql = "SELECT * FROM pelanggan";
$hasil = mysqli_query($koneksi, $sql);

echo "<table border=2px>
<thead>
<tr>
<th>NAMA</th>
<th>ALAMAT</th>
<th>TELEPON</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>". $row[1] ."</td>";
    echo "<td>". $row[2] ."</td>";
    echo "<td>". $row[3] ."</td>";
    echo "</tr>";
}

echo "</tbody></table>";
?>