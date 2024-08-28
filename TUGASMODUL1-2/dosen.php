<?php
// class
// class termasuk template untuk objek yang mempiliki poperti
class Dosen {
    // properti
    // didalam class memiliki 3 properti diantaranya nama, nip, matakuliah
    public $nama;
    public $nip;
    public $matakuliah;
    // metode
    // metode construct yang di dalamnya memiliki nilai nama, nip, kuliah
    public function __construct($nama, $nip, $matakuliah){
        // diimplementasikan
        $this->nama = $nama;
        $this->nim = $nip;
        $this->matakuliah = $matakuliah;
    }
    // metode tampilkandosen
    public function tampilkanDosen(){
        // dimana akan memanggil kembali nama, nip, matakuliah yang ada di metode construct
        return "nama : $this->nama, nip : $this->nip, matakuliah : $this->matakuliah";
    }   
}
// objek
// objek baru yang diberi nama dosen1 
$dosen1 = new Dosen('Bapak Rafi', '01020304', 'Manajemen');
// menampilkan objek yang diimplementasikan ke metod tampilkanDosen()
echo $dosen1->tampilkanDosen();
?>