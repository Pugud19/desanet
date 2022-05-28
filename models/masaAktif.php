<?php 
class MasaAktif{
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
        public function getData(){
            $sql = "SELECT m.fullname AS  nama, d.paket AS nama_paket, d.kecepatan,
            ma.awal_paket, ma.akhir_paket, ma.status, ma.keterangan 
            FROM masa_aktif ma
            INNER JOIN member m ON m.id = ma.member_id
            INNER JOIN data_internet d ON d.id = ma.data_internet_id";
            // prepare statement PDO
            $td = $this->koneksi->prepare($sql);
            $td->execute();
            $tl = $td->fetchAll();
            return $tl;
        }
        // Input Data To data paket
    // public function simpan($data){
    //     $sql = " INSERT INTO todo_list (text, tanggal) VALUES (?,?)";
    //     // prepare statement PDO
    //     $di = $this->koneksi->prepare($sql);
    //     $di->execute($data);       
    // }
    // public function getData($id){
    //     $sql = "SELECT * FROM todo_list WHERE id = ?";
    //     // prepare statement PDO
    //     $di = $this->koneksi->prepare($sql);
    //     $di->execute([$id]);
    //     $d = $di->fetch();
    //     return $d;
    // }
    // // Edit data
    // public function ubah($data){
    //     $sql = "UPDATE data_internet SET paket=?, kecepatan=?, lama_penggunaan=?, harga=?   WHERE id = ?";
    //     // prepare statement PDO
    //     $di = $this->koneksi->prepare($sql);
    //     $di->execute($data);
    // }
        // Delete Data
    // public function hapus($data){
    //     $sql = "DELETE FROM todo_list  WHERE id = ?";
    //     // prepare statement PDO
    //     $di = $this->koneksi->prepare($sql);
    //     $di->execute($data);
    // }

}
?>