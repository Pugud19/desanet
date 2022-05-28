<?php 
class Internet{
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
        public function getInternet(){
            $sql = "SELECT * FROM data_internet";
            // prepare statement PDO
            $di = $this->koneksi->prepare($sql);
            $di->execute();
            $d = $di->fetchAll();
            return $d;
        }
        public function getPaket(){
            $sql = "SELECT COUNT(id) AS total_paket FROM data_internet;";
            // prepare statement PDO
            $di = $this->koneksi->prepare($sql);
            $di->execute();
            $d = $di->fetchAll();
            return $d;
        }
        // Input Data To data paket
    public function simpan($data){
        $sql = " INSERT INTO data_internet (paket, kecepatan, lama_penggunaan, harga) VALUES (?,?,?,?)";
        // prepare statement PDO
        $di = $this->koneksi->prepare($sql);
        $di->execute($data);       
    }
    public function getData($id){
        $sql = "SELECT * FROM data_internet WHERE id = ?";
        // prepare statement PDO
        $di = $this->koneksi->prepare($sql);
        $di->execute([$id]);
        $d = $di->fetch();
        return $d;
    }
    // Edit data
    public function ubah($data){
        $sql = "UPDATE data_internet SET paket=?, kecepatan=?, lama_penggunaan=?, harga=?   WHERE id = ?";
        // prepare statement PDO
        $di = $this->koneksi->prepare($sql);
        $di->execute($data);
    }
        // Delete Data
    public function hapus($data){
        $sql = "DELETE FROM data_internet  WHERE id = ?";
        // prepare statement PDO
        $di = $this->koneksi->prepare($sql);
        $di->execute($data);
    }

}
?>