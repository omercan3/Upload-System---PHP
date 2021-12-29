<?php 



$kaynak = $_FILES["dosya"]["tmp_name"];
$dosyaadi = $_FILES["dosya"]["name"];
$yol = "img";
$yeniad = substr(md5(time()), 0,30);
$uzanti = substr($dosyaadi, -6);
$sonad = $yeniad.$uzanti;

$yukle = move_uploaded_file($kaynak,$yol."/".$dosyaadi);


if($yukle){

echo "Dosya Başarıyla Yüklendi";


}else{

echo "<script>alert('Dosya Yükleme Başarısız!')</script>";


}



 ?>