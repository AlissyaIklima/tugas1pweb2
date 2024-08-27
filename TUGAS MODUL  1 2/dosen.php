<?php
class Dosen {
    public $nama;
    public $nip;
    public $matakuliah;

    public function __construct($nama, $nip, $matakuliah){
        $this->nama = $nama;
        $this->nim = $nip;
        $this->matakuliah = $matakuliah;
    }
    public function tampilkanDosen(){
        return "nama : $this->nama, nip : $this->nip, matakuliah : $this->matakuliah";
    }
    
}
$dosen1 = new Dosen('Bapak Rafi', '01020304', 'Manajemen');

echo $dosen1->tampilkanDosen();

?>