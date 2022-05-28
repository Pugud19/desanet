<?php 
require_once '../koneksi_db.php';
require_once '../models/member.php';

    // tangkap request dari form
    // $user = $_POST['total_pengguna'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // tombol 
    $tombol = $_POST['proses'];

    // $action = [
    //     $fullname,
    //     $username,
    //     $email,
    //     $password,
    //     $role
    // ];
    $data = [
        // $user,
        $fullname,
        $username,
        $email,
        $password,
        $role
    ];

    $obj = new Member();
    $obj->getMember();
    $obj->getAll();
    switch ($tombol) {
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
        header('location:../index.php?hal=data_pengguna');
         break;
    }
    header('location:../index.php?hal=data_pengguna');

?>