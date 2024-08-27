<?
// class
// class termasuk template untuk objek yang mempiliki poperti
class Mahasiswa{
    // properti
    // didalam class mahasiswa terdapat nama, nim, jurusan
    // public artinya dapat dilihat oleh siapa saja yang memasuki halaman tersebut
    public $nama;
    public $nim;
    public $jurusan;
    //construct 
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function tampilkanData(){
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}
$mahasiswa1 = new Mahasiswa('candra', '121314', 'Teknik Informatika');
echo $mahasiswa1->tampilkanData();
?>