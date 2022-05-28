<?php 
require_once '../koneksi_db.php';
require_once '../models/todoList.php';

    // tangkap request dari form
    $text = $_POST['text'];
    $tanggal = $_POST['tanggal'];
    // tombol
    $tombol = $_POST['tombol'];

    $data = [
        $text, // ? pertama
        $tanggal // ? kedua
    ];

    $obj = new TodoList();
    $obj->getJadwal();
    // $obj->getData($data);
    switch ($tombol) {
        case 'simpan': $obj->simpan($data);
            break;
        // case 'ubah': 
        //     $data[] = $_POST['ide']; // ? ke 4 where id = ? 
        //     $obj->ubah($data);
        //     break;
        case 'hapus':
            unset($data); 
            $data[] = $_POST['idh']; // ? ke 4 where id ?
            $obj->hapus($data);
            break;
        default: 
        header('location:../index.php?hal=data_paket');
         break;
    }
    header('location:../index.php?hal=todo_list');


?>