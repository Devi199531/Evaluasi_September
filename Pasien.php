<?php

namespace RumahSakit;


echo "__________DATA PASIEN RS. ARTA BUNDA__________";
echo "<br/>";
echo "<br/>";


	//1. Class, 2.Object
	class Pasien{
		
		//3.Property
		public $nama;
		public $tempatLahir;
		public $tanggalLahir;
		
		
		//6.Konstanta
		const Jk1 = "Perempuan";
		const Jk2 = " Laki - Laki";
		public $alamat;
		
		//4.Method, 5.Enkapsulasi, 7.Constructor
		public function __construct(){
			echo "ini berasal dari konstruktor";
			echo "<br/>";
		}
		
		//7.destructor
		public function __destruct(){
			echo "<br/>";
			echo "ini berasal dari destraktor";
			echo "<br/>";
		}
		
		public function setNama($nama){
			$this -> nama = $nama;
		}
		
		public function setTempatLahir($tempatLahir){
			$this -> tempatLahir = $tempatLahir;
		}
		
		public function setTanggalLahir($tanggalLahir){
			$this -> tanggalLahir = $tanggalLahir;
		}
		
		//6.Konstanta
		public function getJk1(){
			return self :: Jk1;
		}
		
		public function getJk2(){
			return self :: Jk2;
		}
		
		public function setAlamat($alamat){
			$this -> alamat = $alamat;
		}
	}
	
	//8.Inheritance
	class Poli extends Pasien{
		public $namaPoli;
		public $jamMulai;
		
		public function setPoli($namaPoli){
			$this -> namaPoli = $namaPoli;
		}
		
		public function setJamMulai($jamMulai){
			$this -> jamMulai = $jamMulai;
		}
	}
	
	//17.Traits
	trait status1 {

    public function status() {
        return "Sehat";
    }

}
	//class Perawatan implements Perawatan{
	//	public function getNomerKamar(){
	//		return "Berasal dari method getNomerKamar() di class : Perawatan";
	//	}
	//}

//abstract class RumahSakit{
//	abstract public function getInformasi($namaPoli);
//}

trait status2 {

    public function status() {
        return "Sakit";
    }

}

trait status3 {

    public function status() {
        return "Sembuh";
    }

}

class CekStatus {

    // mengeliminasi method salam()
    // dari trait Ucapan dan Sapaan
    // mengguanakan insteadof
    use status1,
        status2,
        status3 {
        status1::status insteadof status2, status3;
    }
}


	
	
$pasien = new Poli();
$pasien -> setNama ("SITI FATIMAH");
$pasien -> setTempatLahir(" Bojonegoro");
$pasien -> setTanggalLahir("24/08/1997");
$pasien -> getJk1();
$pasien -> setAlamat("Jl. Ciputra No.56, Surabaya");
$pasien -> setPoli("Poli Gigi");
$pasien -> setJamMulai("13.00");
echo "<br/>";

$pesan = new CekStatus();


echo "<br/>";
echo "Nama Pasien : ", $pasien -> nama;
echo "<br/>";
echo "Tempat Lahir : ", $pasien -> tempatLahir;
echo "<br/>";
echo "Tanggal Lahir : ", $pasien -> tanggalLahir;
echo "<br/>";
echo "Jenis Kelamin : ", $pasien -> getJk1();
echo "<br/>";
echo "Alamat Lengkap : ", $pasien -> alamat;
echo "<br/>";
echo "Poli yang dituju : ", $pasien -> namaPoli;
echo "<br/>";
echo "Jam Mulai : ", $pasien -> jamMulai;
echo "<br/>";
echo "Status Pasien : ", $pesan->status();
echo "<br/>";
?>