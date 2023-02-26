<?php 
// session oturumunu başlattık, bu işemi her oturum açmak istediğimiz PHP dosyasnda yapıyoruz
session_start(); 
?> 

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	<?php

	// session kontrolü yaparak eğer kullanıcı giriş yapmamışsa giriş formunu, giriş yapmışsa panel ekranını gösteriyoruz

	// isset() fonksiyonu değişken tanımlı mı diye bakar

	if (!isset ($_SESSION['kAdi'])) { ?>

		<center>
			<br>

			<h1>Kitap Paylaşım ve Soruglama</h1>
			<br>

			<hr>

			<h2>Giriş Yap</h2>

			<form action="Index.php" method="POST">

				<label for="kAdi">Kullanıcı Adı:</label>
				<input type="text" name="kAdi" id="kAdi">

				<br>
				<br>

				<label for="kParola">Parola:</label>
				<input type="password" name="kParola" id="kParola">

				<br>
				<br>

				<input type="submit" value="Giriş Yap" name="kGiris" style="width:10%">

			</form>
			<hr>
			<br>

			<?php 
			// İlk olarak form kontrolü yapıyoruz
			if (isset($_POST['kGiris'])) {

    			// formdan gelen verileri karşılaştırıyoruz. tanımladığımız giriş bilgileri doğrumu kontrol ediyoruz
				if ($_POST['kAdi']=="ada" && $_POST['kParola']=="123456") {

        			//Giriş bilgileri doğruysa session atama işlemleri yapıyoruz
					$_SESSION['kAdi']=$_POST['kAdi'];
					$_SESSION['kParola']=$_POST['kParola'];

    				// Yönlendirme işlemi yapıyoruz. İşlem sonucunu takip için durum GET değişkenini tanımlıyoruz(index sayfası)
					header("Location:Index.php?sonuc=#");
					exit;
				}
				else{
    				// İşlem başarısız olduğu zaman işlem sonucunu takip için durum GET değişkeni tanımlıyoruz(index de)
					header("Location:Index.php?sonuc=no");
					exit;
				}
			}

			// İşlemlerden GET değeri döndürüyoruz. Bu sayede işlem durumunu takip edebiliyoruz
			// 2. Kısım
			if ($_GET['sonuc']=="no") {
				echo "<br>";

				echo "Giriş işlemi başarısız, lütfen tekrar deneyiniz.";

				header("Refresh: 5; url=http://localhost/Kitap%20Payla%C5%9F%C4%B1m%20Projesi/index.php");
			}
			else if ($_GET['sonuc']=="cikis") {
				echo "<br>";

				echo "Çıkış işlemi başarıyla yapıldı.";

				header("Refresh: 3; url=http://localhost/Kitap%20Payla%C5%9F%C4%B1m%20Projesi/index.php");
			}
		}
		else{
			?>
			<center>
				<br>

				<!-- Kullancı giriş yapınca göserilecek panel alanı -->
				<h1>Kullancı Paneli</h1>
				<br>
				<hr>
				<br>


				<p>Sayın <?php echo $_SESSION['kAdi'] ?>, hoşgeldiniz</p>

				<p>Kitap eklemek için <a href="KitapEkle.php">tıklayınız</a></p>
				<p>Kitap sorgulatmak için <a href="KitapSorgula.php">tıklayınız</a></p>

				<!-- sessionları silerek oturumu kapatmak için cikis.php dosyasına link verdik -->
				<a href="Cikis.php"><button style="width:10%">Çıkış Yap</button></a>
				
				<br>
				<br>

				<hr>
				<br>
				<br>
				<footer>&copy; Copyright 2023 ztyo.mehmetakif.edu.tr</footer>

			</center>


			<?php 
		}
		?>

	</center>
</body>
</html>