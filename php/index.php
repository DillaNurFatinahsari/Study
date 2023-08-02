...............Function...............<br/>

<?php
function tampil_nama() {
    echo " Halloo !!";
}

tampil_nama();
?>

<br>............Perintah break dalam perulangan.............<br/>
<?php
for ($i = 0; $i < 100; $i++) {
  if ($i == 13) {
    break;
  }
  echo $i;
  echo "<br>";
}
?>
<br>.............Percabangan...............<br/>
<?php
$siswa = array("Vita", "Budi", "Tomi");
$arrlength = count($siswa);
for($x = 0; $x < $arrlength; $x++) {
  echo $siswa[$x];
  echo "<br>";
}
?>


