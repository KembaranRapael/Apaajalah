<?php
$servername = "localhost";
$database = "db_killer";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

function registrasi($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
    $warga_negara = htmlspecialchars($data['warga_negara']);
    $alamat = htmlspecialchars($data['alamat']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $email = htmlspecialchars($data['email']);
    $asal_smp = htmlspecialchars($data['asal_smp']);
    $nama_ayah = htmlspecialchars($data['nama_ayah']);
    $nama_ibu = htmlspecialchars($data['nama_ibu']);
    $penghasilan_orang_tua = htmlspecialchars($data['penghasilan_orang_tua']);
}
