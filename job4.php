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
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}
$mahasiswa1 = new Mahasiswa('Alissya Iklima', '101005', 'Teknik Informatika');
echo "Sebelum update NIM:<br>";
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
$mahasiswa1->setNim('121314');
echo "Setelah update NIM:<br>";
echo $mahasiswa1->tampilkanData();
?>