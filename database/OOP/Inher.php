<?php 
class Inher{
 
	// property 
	public $nama_saya;	
 
 	// method 
	function berinama($saya){
		$this->nama_saya=$saya;
	}
	
}
 
// class turunan atau sub class dari class manusia
// menghubungkan class dengan syntax extends
class teman extends Inher{
 
	// property 
	public $nama_teman;
 
 	// method 
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}
 
// instansiasi 
$Inher = new teman;
 
$Inher->berinama(" Bellaa");
$Inher->berinamateman(" Dilla ");
 
// menampilkan isi property
echo "Nama Saya : " . $Inher->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $Inher->nama_teman;
 
?>