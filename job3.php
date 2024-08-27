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
}
$mahasiswa1= new Mahasiswa('Fikri', '081105', 'Teknik Mesin');
echo "Sebelum update:<br>";
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
$mahasiswa1->updateJurusan('Seni Tari');
echo "Setelah update:<br>";
echo $mahasiswa1->tampilkanData();
?>