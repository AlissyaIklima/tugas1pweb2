<?php
// class 
// class termasuk template untuk objek yang mempiliki poperti
// class mahasiswa memliki 3 poperti nama, nim, jurusan
class Mahasiswa{
        // poperti
    // properti bersifat private atau hanya bisa diakses oleh class itu sendiri dan class keturunannya
    Private $nama;
    Private $nim;
    Private $jurusan;
    // construct dipakai untuk koneksi
    //construct menjadi koeksi dimana didalamnya terdapat properti nama, nim, jurusan 
    // construct bersifat public dapat dilihat oleh semua orang
    public function  __construct($nama, $nim, $jurusan){
        // mengimplementasikan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
     // metode tampilkanData() menyimpan properti nama, nim, jurusan 
    public function tampilkanData(){
        // memanggil kembali
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
    // metode tampilkanData() menyimpan properti $jurusanBaru 
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
    // metode tampilkanData() menyimpan properti $nimBaru
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}
// objek
// membuat objek baru $mahasiswa1 yang di dalamya terdapat nama, nim, jurusan
$mahasiswa1 = new Mahasiswa('Alissya Iklima', '101005', 'Teknik Informatika');
echo "Sebelum update NIM:<br>";
// menampilkan apa yang ada pada tampilkanData
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
// menampilkan apa yang ada pada setNim
$mahasiswa1->setNim('121314');
echo "Setelah update NIM:<br>";
// menampilkan apa yang ada pada tampilkanData
echo $mahasiswa1->tampilkanData();
?>