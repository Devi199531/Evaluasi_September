<?php

namespace RumahSakit;

include 'Pasien.php';


	final class Rawat extends Pasien{
		public $diagnosa;
		public $lamaInap;
		
		public function setDiagnosa($diagnosa){
			$this -> diagnosa = $diagnosa;
		}
		
		public function setLamaInap($lamaInap){
			$this -> lamaInap =$lamaInap;
		}
	}

	//interface Kamar{
		//public function getNomerKamar();
	//}

$info = new  Pasien();
//echo $info -> getInformasi ("Poli Syaraf");
echo "<br/>";

	
$sakit = new Rawat();
$sakit -> setDiagnosa ("Usus Buntu");
$sakit -> setLamaInap (7);

echo "<br/>";
echo "Pernah Melakukan Rawat Inap Dengan Rincian Sebagai Berikut :";
echo "<br/>";
echo "<br/>";
echo "Diagnosa : ", $sakit -> diagnosa;
echo "<br/>";
echo "Lama Inap : ", $sakit -> lamaInap;
echo "<br/>";
?>
