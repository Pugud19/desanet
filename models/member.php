<?php 
class Member{
    // member 1 variable
    public $koneksi;
    // member 2 variable
    public function __construct()
    {
        // panggil instance objek PDO di koneksi_db.php
        global $dbh;
        $this->koneksi = $dbh;
    }
        // Read Data From Database
        public function getMember(){
            $sql = "SELECT COUNT(id) AS total_pengguna FROM member";
            // prepare statement PDO
            $mr = $this->koneksi->prepare($sql);
            $mr->execute();
            $mb = $mr->fetchAll();
            return $mb;
        }
        // Read Data From Database
        public function getAll(){
            $sql = "SELECT * FROM member";
            // prepare statement PDO
            $mr = $this->koneksi->prepare($sql);
            $mr->execute();
            $mb = $mr->fetchAll();
            return $mb;
        }
        public function getId($id){
            $sql = "SELECT * FROM member WHERE id = ?";
            // prepare statement PDO
            $mr = $this->koneksi->prepare($sql);
            $mr->execute([$id]);
            $mb = $mr->fetch();
            return $mb;
        }
        // Edit data
        public function ubah($data){
            $sql = "UPDATE member SET fullname=?, username=?, email=?, password=?, role=?   WHERE id = ?";
            // prepare statement PDO
            $mr = $this->koneksi->prepare($sql);
            $mr->execute($data);
        }
            // Delete Data
        public function hapus($data){
            $sql = "DELETE FROM member  WHERE id = ?";
            // prepare statement PDO
            $mr = $this->koneksi->prepare($sql);
            $mr->execute($data);
        }
            // Read Data From Database for Login
    public function cekLogin($data){
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(?))";
        // prepare statement PDO
        $mr = $this->koneksi->prepare($sql);
        $mr->execute($data);
        $mb = $mr->fetch();
        return $mb;
        
    }
}
?>