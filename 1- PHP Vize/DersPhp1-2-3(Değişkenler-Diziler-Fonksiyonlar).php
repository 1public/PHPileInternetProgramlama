<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sayfa Başlığı</title>
    <style type="text/css">
        Buraya css kodlarımız gelir
    </style>
</head>
<body>
<?php

// Ders 1

#1: Ekrana çıktı verme
echo "Merhaba Dünya"."<br><br>";

#2: Değişken oluşturma

$degisken1 =  10;
$Degisken1 =  10;

$degisken2 =  10.12;
$degisken3 =  "izmit";
$degisken4 =  "izmit";
$degisken5 =  "41";
$degisken6 = true;

#3: Değişkenleri yazdırma

print($degisken1);
echo "<br><br>";
print($Degisken1);
echo "<br><br>";   
print($degisken2);
echo "<br><br>";   
print($degisken3);
echo "<br><br>";   
print($degisken4);
echo "<br><br>";   
print($degisken5);
echo "<br><br>";   
print($degisken6);
echo "<br><br>";


#4: Değişken türlerini öğrenme

var_dump($degisken1);
var_dump($Degisken1);
var_dump($degisken2);
var_dump($degisken3);
var_dump($degisken4);
var_dump($degisken5);
var_dump($degisken6);

echo "<br><br>";

#5: Tip Dönüşümü 

$dnss = (int)$degisken5;
var_dump($dnss);

$dnss = (bool)$degisken1;
var_dump($dnss);

echo "<br><br>";
echo "<br><br>";

// Ders 2

#6:  Dizi oluşturma çeşitleri

$kHayvanlar = ["tavuk", "ördek", "kaz", "hindi"];

print($kHayvanlar[0]."<br>");
print($kHayvanlar[2]."<br>");
print_r($kHayvanlar);

echo "<br><br>"; 


$yHayvanlar = array ("timsah", "aslan", "kaplan", "tilki");

print($yHayvanlar[1]."<br>");
print($yHayvanlar[3]."<br>");
print_r($yHayvanlar);

echo "<br><br>"; 


    # indeks atamasını kendimiz yapıyoruz
$eHayvanlar = ["6"=>"kedi", "2"=>"köpek", "10"=>"kuş", "4"=>"balık"]; 

print($eHayvanlar[6]."<br>");
print($eHayvanlar[10]."<br>");
print_r($eHayvanlar);

echo "<br><br>"; 

    #indeks atamak yerine anahtar kelime ve değer kullanıyoruz (key&value)
$eHayvanlar2 = ["at"=>"kedi", "köpek", "aslan"=>"kuş", "balık"];

print($eHayvanlar2[1]."<br>");
print_r($eHayvanlar2);

echo "<br><br>";


#7: Dizi matrisleri

 $hayvanlar = ["eHayvanlar"=>["evcil"=>"kedi", "1"=>"köpek", "2"=>"kuş"] , "yHayvanlar"=>["aslan", "köpek", "kuş"] ];

// echo $hayvanlar["eHayvanlar"]["evcil"];
// echo "<br>";
echo $hayvanlar["yHayvanlar"][2];
// echo "<br>";

$hayvanlar2 = [ ["evcil"=>"kedi", "1"=>"köpek", "2"=>"kuş"] , ["aslan", "köpek", "kuş"] ];


echo $hayvanlar2[1][0];

echo "<br><br>";

// Ders 3

#8: Dizilerde fonksiyon kullanımı


$kurslar = [ "PHP", "JAVASCRİPT",
"JQUARY",
"BOOTSTRAP"
];

# elaman sayısı öğrenme
echo count($kurslar); 
echo "<br><br>";

# ?
//echo count(var); 
echo "<br><br>";

# Bir diziyi belirlenen ayraç yardımı ile birleştirip string bir değer döndürür.
echo implode(' ', $kurslar);
echo "<br><br>";

$degisken = implode(' ', $kurslar);
print($degisken);
echo "<br><br>";

#bir değişken içindeki verileri belirlenen belirtece göre ayırmayı sağlayan fonksiyondur (dizi yapar)

$metin = "bugün, hava çok güzel";
$hava = explode(' ', $metin);  
print_r($hava);
echo "<br><br>";

# bir değişken in tipini array olma durumu kontrol eder, öyleyse 1 döndürür 
echo is_array($kurslar);
echo "<br><br>";
echo is_array($hava);
echo "<br><br>";
$x = 1;
echo is_array($x);
echo "<br><br>";

# dizi içerğini ters çevirir 

print_r(array_reverse($kurslar));
echo "<br><br>";


## detay 1 

# Diziyi elemanların değerlerine göre alfabetik olarak sıralar, Dizinin anahtarlarını yeni sıralamaya göre düzenlerler.

$kurslar = [
"1"=>"PHP",
"2"=>"JAVASCRİPT",
"3"=>"JQUARY",
"4"=>"BOOTSTRAP"
];

sort($kurslar);
print_r($kurslar);
echo "<br>";
rsort($kurslar);
print_r($kurslar);
echo "<br><br><br>";

# Diziyi eleman değerlerinin alfabetik sıralamasına göre düzenler ama anahtarları değiştirmezler. 
$kurslar = [
"10"=>"PHP",
"9"=>"JAVASCRİPT",
"33"=>"HTML",
"2"=>"BOOTSTRAP"
];
asort($kurslar);
print_r($kurslar);
echo "<br>";
arsort($kurslar);
print_r($kurslar);
echo "<br><br>";
echo "<br><br>";

# Diziyi elemanların anahtar değerlerine göre sıralar ve anahtarları değiştirmezler.

ksort($kurslar);
print_r($kurslar);
echo "<br>";
krsort($kurslar);
print_r($kurslar);

echo "<br><br>";
echo "<br><br>";echo "<br><br>";
echo "<br><br>";
 
## Detay 2 

$kurslar = [
"PHP",
"JAVASCRİPT",
"JQUARY",
"BOOTSTRAP"
];

# dahili işaretçiyi dizideki ilk öğeye taşır ve çıktı verir
echo current($kurslar);
echo "<br><br>";

# dahili işaretçiyi dizideki bir sonraki öğeye taşır ve çıktı verir
echo next($kurslar);
echo "<br><br>";

# dahili işaretçiyi dizideki son öğeye taşır ve çıktı verir
echo end($kurslar);
echo "<br><br>";

# Bir dizi içindeki elemanları rastgele sıralamak istiyorsak shuffle() komutunu kullanırız.
shuffle($kurslar);
print_r($kurslar);
echo "<br><br>";

#array_rand fonksiyonu belirttiğimiz dizi içerisinde rastgele verinin anahtar değerini döndürür.

$ders = array_rand($kurslar, 1);
echo "<br><br>";

echo $ders;
echo $kurslar[$ders];
echo "<br><br>";
print_r($kurslar);
echo "<br><br>";

$ders = array_rand($kurslar, 2);
echo $kurslar[$ders[0]];
echo "<br><br>";
echo $kurslar[$ders[1]];
echo "<br><br>";
echo "<br><br>";

# değer olarak eğer aradığınız değer dizide var ise o elemanın anahtarını döner.

$kurslar = [
"PHP",
"JAVASCRİPT",
"JQUARY",
"BOOTSTRAP"
];

$ders = array_search('JQUARY', $kurslar);
echo $ders;
echo "<br>";
var_dump($ders);
echo "<br><br>";

echo $kurslar[$ders];




















?>

</body>
</html>