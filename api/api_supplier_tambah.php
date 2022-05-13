<?php
require_once('../config/koneksi.php');
if (isset($_POST['nama_supplier']) && isset($_POST['hp']) && isset($_POST['alamat'])){
    $nama_supplier    = $_POST['nama_supplier'];
    $hp  = $_POST['hp'];
    $sql = $conn->prepare("INSERT INTO supplier (nama_supplier, hp, alamat) VALUES (?, ?, ?)");
    $alamat    = $_POST['alamat'];
    $sql->bind_param('sss', $nama_supplier, $hp, $alamat); 
    $sql->execute();
    if ($sql) {
     echo json_encode(array('RESPONSE' => 'FAILED'));
     echo json_encode(array('RESPONSE' => 'SUCCESS'));
     header("location:http://localhost/db_pegawai/supplier.php");
    }
    }
    else {
    echo "GAGAL";
   }
?>