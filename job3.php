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
    // metode updateJurusan() didalamnya mencangkup properti $jurusanBaru
    public function updateJurusan($jurusanBaru) {
        // mengimplementasikan
        $this->jurusan = $jurusanBaru;
    }
}
// objek
// membuat objek baru dan menimpan di properti $mahasiswa1
$mahasiswa1= new Mahasiswa('Fikri', '081105', 'Teknik Mesin');
echo "Sebelum update:<br>";
// menampilkan apa yang ada pada tampilkanData
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
// menampilkan apa yang ada pada updateJurusan
$mahasiswa1->updateJurusan('Seni Tari');
echo "Setelah update:<br>";
// menampilkan apa yang ada pada tampilkanData
echo $mahasiswa1->tampilkanData();
?>