<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
   <?php 
                        # Döngüler
 # For Döngüsü

   for ($i=0; $i < 10; $i++) { 
    echo "$i <br>";
}

echo "<br>";
echo "<br>";


for ($i=0; $i <5; $i++) { 
    echo "---". "<br>";
    for ($j=0; $j < 5 ; $j++) { 
        
        echo "i'nin değerei ".$i." iken j'nin değeri ".$j." çarpımı ise: ". $i*$j. "<br>";
    }
}
echo "<br>";
echo "<br>";

for ($i=1; $i <=5 ; $i++) { 
    echo "---". "<br>";

    for ($j=1; $j <=5 ; $j++) { 
        
        echo $i."x".$j."=". $i * $j; 
        echo "<br>";
    }
}
echo "<br>";
echo "<br>";

for ($i=0; $i <= 5; $i++) { 

    for ($j=0; $j <= 5 ; $j++) { 
        if ($j % 2 == 1) {
            ?>
            <p style="color:red;">
                <?php 
                echo "$i x $j = " .$i * $j . "<br>";

                ?>
            </p>
            <?php 
        }else{
            echo "$i x $j = " .$i*$j. "<br>";
        }
    }
    echo "<hr>";
}

echo "<br>";
echo "<br>";

        # Dizi ve Döngülerin Bir Arada Kullanımı

$dizi = ["kedi", "köpek", "inek", "ördek", "balık", "deve", "geyik"];

echo count($dizi);

array_push($dizi, "kuş");

echo count($dizi);


for ($i=0; $i < count($dizi); $i++) { 
    echo $dizi[$i]. "<br>";
}

echo "<br>";
echo "<br>";


    # Dizi ve Döngüler 
$sayilar = [];

for ($i=121; $i <=277 ; $i++) { 
    array_push($sayilar, $i);

}
foreach ($sayilar as $key) {
    echo $key."<br>";
}


echo "<br>";
echo "<br>";


for ($i=1, $toplam = 0; $i < 10 ; $i++, $toplam=$toplam+$i) {

        #$toplam = $toplam + $i;
        #echo "<br>";
    ?>
    <p style="background-color: gray;">
        <?php 
        echo "i'nin değeri ".$i." iken toplam = ". $toplam."<br>";
        ?>
    </p>
    <?php 

}

echo "<br>";
echo "<br>";

$dizi = [];

for ($j=0; $j < count($sayilar) ; $j++) { 
    if ($sayilar[$j]%6==0) {
        array_push($dizi, $sayilar[$j]);
    }
}

for ($k=0; $k < count($dizi); $k++) { 
    echo $dizi[$k]."<br>";
}

echo "<br>";
echo "<br>";




foreach ($dizi as $key) {
    echo $key."<br>";
}

echo "<br>";
echo "<br>";

echo "İl Plaka Kodu: <select name='iller'>";
for ($i=1; $i < 82; $i++) { 
    echo "<option value='$i'>$i</option>";
}
echo "En sevdiğin hayvan: <select name='hayvan'>";

$hayvan = ["kedi","köpek","öredek"];

for ($i=0; $i < count($hayvan); $i++) { 
    echo "<option value='$i'>$hayvan[$i]</option>";
}

echo "<option value='$i'>kedi</option>";
echo "<option value='$i'>köpek</option>";
echo "<option value='$i'>$hayvan[2]</option>";  

?>

</body>
</html>