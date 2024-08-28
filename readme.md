# MODUL 1, 2
Didalam modul kali ini kita mempelajari class dan objek, Implementasi Constructor, Membuat Metode Tambahan, Penggunaan Atribut dan Metode

## Jobsheet 2: Menggunakan Konsep Kelas dan Objek dalam PHP

## JOBSHEET 1

```php
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
```
## OUTPUT
```bash
nama : candra, nim : 121314, jurusan : Teknik Informatika
```
## Keterangan Output
Objek baru memunculkan nama, nim, jurusan. Dan disaat menampilkan objek baru maka akan mengiplementasikan metod tampilkanData() dan dimana tampilkanData() ini akan memanggil kembaliapa yang sudah ada di metode construct

## Referensi Kode

[COM](https://www.warungbelajar.com/)

## JOBSHEET 2

```php
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
```
## OUTPUT
```bash
Nama: Rafi, Nim: 090505, Jurusan: Akuntasi
```
## Keterangan Output
Objek baru menampilkan nama, nim, jurusan, dan objek baru  mahasiswa1 akan menampilkan hasil implementasi dari tampilkanData() dan tampilkanData() akan memanggil kembali nama, nim, jurusan yang berada di metode construct

## Referensi Kode

[COM](https://www.warungbelajar.com/)

## JOBSHEET 1

```php
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
```
## OUTPUT
```bash
Sebelum update:
Nama: Fikri, Nim: 081105, Jurusan: Teknik Mesin

Setelah update:
Nama: Fikri, Nim: 081105, Jurusan: Seni Tari
```
## Keterangan Output
objek baru yang dibuat menampilkan sebelum di update yang berisi nama, nim, jurusan dan setelah update yang berisi nama, nim, jurusan. objek baru mahasiswa1 akan menampilkan sebelum diupdate dan mahasiswa1 akan menampilkan hasil implementasi pada metode tampilData() dan begitu juga pada sesudah update.
## Referensi Kode

[COM](https://www.warungbelajar.com/)

## JOBSHEET 4

```php
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
```
## OUTPUT
```bash
Sebelum update NIM:
Nama: Alissya Iklima, Nim: 101005, Jurusan: Teknik Informatika

Setelah update NIM:
Nama: Alissya Iklima, Nim: 121314, Jurusan: Teknik Informatika
```
## Keterangan Output
objek baru yang dibuat menampilkan sebelum di update nim yang berisi nama, nim, jurusan dan setelah update nim yang berisi nama, nim, jurusan. objek baru mahasiswa1 akan menampilkan sebelum diupdate nim dan mahasiswa1 akan menampilkan hasil implementasi pada metode tampilData() dan begitu juga pada sesudah update.
## Referensi Kode

[COM](https://www.warungbelajar.com/)

## JOBSHEET Tugas Dosen

```php
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
```
## OUTPUT
```bash
nama : Bapak Rafi, nip : , matakuliah : Manajemen
```
## Keterangan Output
Objek baru dosen1 menampilkan nama, nip, jurusan. dan objek baru dosen1 akan menampilkan implementasi tampilkanDosen() dan tampilkanDosen() ini akan memanggil kembali apa yang ada di motode construct.
## Referensi Kode

[COM](https://www.warungbelajar.com/)
