<?php
require_once('../config/koneksi.php');
if (isset($_POST['id'])) {
    $id       = $_POST['id'];
    $nama_supplier      = $_POST['nama_supplier'];
    $hp             = $_POST['hp'];
    $alamat            = $_POST['alamat'];
    $sql = $conn->prepare("UPDATE supplier SET nama_supplier=?, hp=?, alamat=? WHERE id=?");
    $sql->bind_param('sssd',$nama_supplier, $hp, $alamat,$id);
    $sql->execute();
    if ($sql) {
}
        //echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location: http://localhost/db_pegawai/supplier.php");
        echo json_encode(array('RESPONSE' => 'FAILED'));
    } else {
    }
    echo "GAGAL";