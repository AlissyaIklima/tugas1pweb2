<?php
// class
// class termasuk template untuk objek yang mempiliki poperti
class Mahasiswa{
    // properti
    // didalam class mahasiswa terdapat nama, nim, jurusan
    // public artinya dapat dilihat oleh siapa saja yang memasuki halaman tersebut
    public $nama;
    public $nim;
    public $jurusan;
    //construct menjadi koeksi dimana didalamnya terdapat properti nama, nim, jurusan 
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // metode tampilkanData yang bersifat public yang dimana bisa dilihat oleh orang lain
    public function tampilkanData(){
        // memanggil kembali nama, nim, jurusan
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}
// objek
// membuat objek baru dan menimpan di properti $mahasiswa1
$mahasiswa1 = new Mahasiswa('candra', '121314', 'Teknik Informatika');
// menampilkan properti $mahasiswa1 dengan memanggil tampilkanData()
echo $mahasiswa1->tampilkanData();
?>