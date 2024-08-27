# PWEB2
PWEB2 MODUL 3, 4
/ JOBSHEET /
JOB1.php
<?php
class Mahasiswa {}
//class diatas termasuk class yang akan menampung properti
class Mahasiswa {
//berikut termasuk properti yang bersifat public yang berarti bisa dilihat oleh //siapapun.
//jadi nama, nim, jurusan bisa dilihat oleh orang lain dan diri kita sendiri
    public $nama;
    public $nim;
    public $jurusan;
    //metode
    //kenapa metode, metode merupakan nama lain dari function itu sendiri
    //function menggunakan construct dipakai untuk koneksi
    //di dalam construct itu sndiri terdapat nilai atau properti
    public function __construct($nama, $nim, $jurusan){
    //jangan lupa memastikan objek memiliki nilai atau properti
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // tampilData digunakan untuk menampilkan data dari objek
    public function tampilkanData(){
    //memanggil kembali atau menggulang nama, nim, jurusan
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}
// objek
//objek selalu berada di paling bawah sendiri setelah class sudah tertutup
//membuat objek baru yang akan disimpan didalam $mahsiswa1
$mahasiswa1 = new Mahasiswa("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
// echo disini berguna menampilkan tampilkanData yang sudah diinput diatas
echo $mahasiswa1->tampilkanData();
?>

TAMPILAN OUTPUT :
![image](https://github.com/user-attachments/assets/03225173-c980-44e3-93c7-b5030bf0e52f) 
output yang ditampilkan nama, nim, jurusan karena apa?
karena didalam class mahasiswa menginputkan properti yang sudah dijelaskan diatas.
lalu membuat koneksi dengan metode construct yang didalamnya terdapat nama, nim, jurusan. dan tidak lupa membuat metode tampilkanData(). lalu memanggil kembali nama, nim, jurusan.
dan dibagian objekpun meng echo tampilkanData(); 
----------------------------------------
JOB2.php
<?php
// class termasuk template untuk objek yang mempiliki poperti
// didalam class Mahasiswa terdapat 3 properti yang diprivate
class Mahasiswa {
    // private artinya hanya mahasiswa saja yang dapat melihat
    Private $nama;
    Private $nim;
    Private $jurusan;
    // construct dipakai untuk koneksi
    // properti "$nama, $nim, $jurusan"
    // objek $this->....
    public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
    //  get mengambil value 
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    //set memasukan value 
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
// objek
// membuat objek baru dan menyimpan dalam variable mahasiswa
$mahasiswa1 = new Mahasiswa("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
echo  $mahasiswa1-> getNama();
echo "<br>";
echo  $mahasiswa1-> getNim();
echo "<br>";
echo  $mahasiswa1-> getJurusan();
?>

TAMPILAN OUTPUT :
![image](https://github.com/user-attachments/assets/116186e7-3d06-4cbe-a0a6-eea739a45324) 
dalam output kali ini menggunakan get dan set. get itu untuk mengambil value, sedangkan set itu sendiri untuk memasukan value. jadi hasil output yang ditampilkan itu nama, nim, jurusan karena, disebelumnya kita melakukan inputan metode get di class mahasiswa.

----------------------------------------
JOB3.php
<!-- pewarisan  -->
<?php
class Pengguna{
    // hanya bisa diakses oleh class itu sendiri dan class turunannya
    protected $nama;
    // merupakan fungsi khusus yang nanti akan memanggil objek yang dibuat
    public function __construct($nama){
        $this->nama = $nama;
    }
    //  get mengambil value 
    public function getNama(){
        return $this->nama;
    }
}
// extends yaitu sebuah pewarisan
// jadi bisa dikatakan  class Dosen mewarisi poperti Pengguna
class Dosen extends Pengguna{
    // jika privat berarti hanya dapat diakses oleh class itu sendiri dan class turunannya
    private $penulis;
    // construct dipakai untuk koneksi
    public function __construct($nama, $matakuliah){
        // memanggil dan memastikan kalau variable atau properti memiliki nilai
        parent::__construct($nama);
        // memastikan memiliki nilai
        $this->matakuliah = $matakuliah;
    }
    // berperan untuk mengambil nilai getPenulis
    public function getPenulis(){
        return $this->matakuliah;
    }
}
// objek
// membuat objek baru $pengguna1
$pengguna1 = new Pengguna("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
echo $pengguna1->getNama();
?>

TAMPILAN OUTPUT :
![image](https://github.com/user-attachments/assets/040ff9b0-43b1-400b-9c22-3d073fd297f3)
kenapa pada output kali ini hanya menampilkan nama saja? 
dikarenakan saat membuat metode get di dalam class pengguna hanya menambahkan getNama lalu memanggilkembali dengan cara mereturn.

----------------------------------------
JOB4.php
<?php
// class
// class termasuk template untuk objek yang mempiliki poperti
class Pengguna{
    public function __construct(){

    }
    // dimana dapat mengakses fitur yang dapat mengembalikan "masuk ke web"
    public function aksesFitur(){
        return "Masuk ke web";
    }
}
// class mahasiswa mewarisi pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){

    }
    // dimana dapat mengakses fitur yang dapat mengembalikan "lihat hasil"
    public function aksesFitur(){
        return "Lihat Hasil";
    }
}
// class dosen mewarisi pengguna
class Dosen extends Pengguna{
    public function __construct(){

    }
    // dimana dapat mengakses fitur yang dapat mengembalikan "edit halaman"
    public function aksesFitur(){
        return "Edit Halaman";
    }
}
// objek
// objek ini bersifat array
$lihat = [new pengguna(), new Mahasiswa(), new Dosen()];
// menggunakan perulangan foreach
// dimana objek $lihat diubah menjadi $akses
foreach ($lihat as $akses){
    // menampilkan aksesFitur
    echo $akses->aksesFitur();
    echo "<br>";
}
?>

TAMPILAN OUTPUT :
![image](https://github.com/user-attachments/assets/2c738aeb-b60a-4530-adc2-8d8af21f9797)
kenapa dibagian objek hanya menampilkan echo aksesFitur(), dikarenakan pada saat meng inputkan pada bagian class memiliki fungsi yang sama untuk dapat mengaksesfitur disetiap class nya.

----------------------------------------
JOB4.php
<?php
// abstract class tidak dapat digunakan dalam pembuatan objek
// dalam membuat abstract class perlu menambahkan perintah di depan class
abstract class Pengguna{
    // di line 5 aksesFitur akan manampilkan aksesFitur yang ada di dalam
    // class dosen dan class mahasiwa
    abstract public function aksesFitur();
}
// class mahasiswa mewarisi pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){

    }
    public function aksesFitur(){
        return "Lihat Hasil";
    }
}
// class dosen mewarisi pengguna
class Dosen extends Pengguna{
    public function __construct(){

    }
    public function aksesFitur(){
        return "Edit Halaman";
    }
}
// membuat objek baru dan menyimpan dalam variable mahasiswa
$mahasiswa = new Mahasiswa();
// membuat objek baru dan menyimpan dalam variable dosen
$dosen = new Dosen();
// menampilkan aksesFitur
echo $mahasiswa->aksesFitur(); 
echo "<br>";
// menampilkan aksesFitur
echo $dosen->aksesFitur(); 
?>

TAMPILAN OUTPUT :
![image](https://github.com/user-attachments/assets/2d52b1d8-6596-4677-bfaa-228c42136487)
output yang ditampilkan echo aksesFitur() dimana aksesFitur() ini berada di setiap class dosen, mahsiswa, pengguna. jadi saat dipanggil atau ditampilkan hanya menampilkan aksesFitur yang sudah ada nilainya.
