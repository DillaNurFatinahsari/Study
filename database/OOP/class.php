<?php
// Class, Object, Property dan Method

//nama class
class manusia{
    //property
    var $nama;
    var $warnakulit;
    
    //method 
    function tampilkan_nama(){
        return "Dilla Nur Fatinah Sari <br/>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya abu abu <br/>";
    }
    
}
//instansiasi 
$manusia = new manusia();
 
//memanggil method tampilkan_nama 
echo $manusia->tampilkan_nama();
 
//memanggil method warna_kulit 
echo $manusia->warna_kulit();

