<?php 
require_once '../koneksi_db.php';
require_once '../models/Internet.php';

    // tangkap request dari form
    $paket = $_POST['paket'];
    $kecepatan = $_POST['kecepatan'];
    $waktu = $_POST['lama_penggunaan'];
    $harga = $_POST['harga'];
    // tombol
    $tombol = $_POST['tombol'];

    $data = [
        $paket, // ? 1
        $kecepatan, // ? 2
        $waktu, // ? 3
        $harga // ? 4
    ];

    $obj = new Internet();
    $obj->getInternet();
    $obj->getPaket();
    // $obj->simpan($data);
    switch ($tombol) {
        case 'simpan': $obj->simpan($data);
            break;
        case 'ubah': 
            $data[] = $_POST['ide']; // ? ke 4 where id = ? 
            $obj->ubah($data);
            break;
        case 'hapus':
            unset($data); 
            $data[] = $_POST['idh']; // ? ke 4 where id ?
            $obj->hapus($data);
            break;
        default: 
        header('location:../index.php?hal=data_paket');
         break;
    }
    header('location:../index.php?hal=data_paket');


?>