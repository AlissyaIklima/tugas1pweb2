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
        // menginisialiasi atribut
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
    // metode tampilkanData yang bersifat public yang dimana bisa dilihat oleh orang lain
    public function tampilkanData(){
        // memanggil kembali nama, nim, jurusan
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
// objek
// membuat objek baru dan menimpan di properti $mahasiswa1
$mahasiswa1 = new Mahasiswa('Rafi', '090505', 'Akuntasi');
// menampilkan properti $mahasiswa1 dengan memanggil tampilkanData()
echo $mahasiswa1->tampilkanData();
?>