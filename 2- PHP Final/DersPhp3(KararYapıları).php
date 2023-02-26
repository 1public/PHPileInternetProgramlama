<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
# Karar Yapıları

        /*
        == -> eşit mi
        === -> denk mi
        != -> Eşit değilse
        */

        if (1>2) {
            echo "Doğru";
        }
        else if (1<2) {
            echo "Yanlış";
        }

        echo "<br>";
        echo "<br>";

        if ("5" == 5) {
        echo "şart sağlnadı";
        }
        else{
        echo "şart sağlnmadı";
        }

        echo "<br>";
        echo "<br>";

        $a = 5; 
        
        if ($a == 5) {
            echo "şart sağlnadı";
        }
        else{
            echo "şart sağlnmadı";
        }

        echo "<br>";
        echo "<br>";

        # tek satırda karar yapısı kullanımı

        $a = -1;
        echo $a > 3 ? "a 3 ten büyük" : "a 3 ten küçük";

        
        echo "<br>";
        echo "<br>";

        $sayi = 4;

        if ($sayi>4 || $sayi<4) {
            echo "koşul sağlandı";
        }
        else{
            echo "koşul sağlanmadı";
        }
        
        echo "<br>";
        echo "<br>";

        $sayi = 10;

        if ($sayi>6 xor $sayi<5) {
            echo "koşul sağlandı";
        }
        else{
            echo "koşul sağlanmadı";
        }
        
        echo "<br>";
        echo "<br>";


        $lao = [1,2,3,4];

        if (count($lao)>3) {
        	echo "evet";
        }
        else {
        	echo "hayır";
        }
        echo "<br>";
		echo "<br>";



        # Karar Yapıları Örnek


        $urun1 = 0;
        $urun2 = 10;
        $urun3 = 0;
        $sepet =  $urun1 + $urun2 + $urun3; 
        $kargo = 30;

        if ($sepet > 100) {
        	$sepet = $sepet*90/100;
		echo "kargo ücretsiz ödenecek toplam: ".$sepet."TL";

        }
        else if ($sepet>50) {
        	echo "kargo ücretsiz ödenecek toplam: ".$sepet."TL";
        	// code...
        }
        else{
        	$sepet = $sepet + $kargo;
        	echo "kargo dahil ödenecek toplam: ".$sepet."TL";
        }

                echo "<br>";
                echo "<br>";



        # switch yapısını kullanarak hangi günde olduğunu bulmak
                $kalan = 244 % 7;

        $gun = $kalan+1;

        switch ($gun) {
            case '1':
            echo "pazartesi";
                break;
           case '2':
            echo "salı";
                break;
           case '3':
            echo "çarşamba";
                break;
           case '4':
            echo "perşembe";
                break;       
           case '5':
            echo "cuma";
                break;       
           case '6':
            echo "cumartesi";
                break;       
           case '7':
            echo "pazar";
                break;                                                                            
            default:
            echo "tanımsız gün";
                break;
        }

 ?>
</body>
</html>