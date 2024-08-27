<?php
class Mahasiswa{
    Private $nama;
    Private $nim;
    Private $jurusan;
    // construct dipakai untuk koneksi
    public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
    public function tampilkanData(){
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
$mahasiswa1 = new Mahasiswa('Rafi', '090505', 'Akuntasi');
echo $mahasiswa1->tampilkanData();

?>