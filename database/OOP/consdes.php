<?php
 
//class construktor 
class consdes{
    //property
    var $nama;
    var $warnakulit;
    // method construct ini di jalankan pertama kali
    function __construct(){
        echo "Hello !! <br/>";
    }
    //method destruct ini di jalanan terakhir kali
    function __destruct(){
        echo "Saya Dilla  <br/>";
    }
    
    //method manusia
    function tampilkan_nama(){
        return "Tinggi badan saya : 149 cm:( <br/>";
    }
    
}
//instansiasi class 
$consdes = new consdes();
 
//memanggil method tampilkan_nama 
echo $consdes->tampilkan_nama();