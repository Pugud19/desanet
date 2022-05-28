<?php 
require_once '../koneksi_db.php';
require_once '../models/masaAktif.php';

    // tangkap request dari form
    $nama = $_POST['nama'];
    $paket = $_POST['nama_paket'];
    $kecepatan = $_POST['kecepatan'];
    $awal = $_POST['awal_paket'];
    $akhir = $_POST['akhir_paket'];
    $status = $_POST['status'];
    $ket = $_POST['keterangan'];
    // tombol
    // $tombol = $_POST['tombol'];

    $data = [
        $nama, // ? 1
        $paket, // ? 2
        $kecepatan, // ? 3
        $awal,
        $akhir,
        $status,
        $ket,
    ];

    $obj = new MasaAktif();
    $obj->getData();
    // $obj->simpan($data);
    // switch ($tombol) {
    //     case 'simpan': $obj->simpan($data);
    //         break;
    //     case 'ubah': 
    //         $data[] = $_POST['ide']; // ? ke 4 where id = ? 
    //         $obj->ubah($data);
    //         break;
    //     case 'hapus':
    //         unset($data); 
    //         $data[] = $_POST['idh']; // ? ke 4 where id ?
    //         $obj->hapus($data);
    //         break;
    //     default: 
    //     header('location:../index.php?hal=data_paket');
    //      break;
    // }
    header('location:../index.php?hal=data_paket');


?>