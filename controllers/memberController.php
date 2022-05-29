<?php
session_start(); 
require_once '../koneksi_db.php';
require_once '../models/member.php';

    // tangkap request dari form
    // $user = $_POST['total_pengguna'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rl = $_POST['role'];

    // tombol 
    $tombol = $_POST['proses'];

    $action = [
        $username,
        $password
    ];
    $data = [
        // $user,
        $fullname,
        $username,
        $email,
        $password,
        $rl
    ];

    $obj = new Member();
    $mb = $obj->cekLogin($action);
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
        // logic login member
        if (!empty($mb)) {
            $_SESSION['member'] = $mb;
            header('location:../index.php?hal=home');
        }else {       
            header('location:../gagal_login.php');
        }
    

?>