<?php
 
//class enkap = hak akses protected
class enkap{
    //menentukan property dengan protected
    protected $nama = "Nauraa";    
    
    //method protected
    protected function nama(){
        return "Nama saya Nauraa " .$this->nama;
    }
    
    public function tampilkan_nama(){
        return $this->nama;
    }
    
}
 
//instansiasi class 
$enkap = new enkap();
 
//memanggil method public tampilkan_nama 

echo $enkap->tampilkan_nama();


