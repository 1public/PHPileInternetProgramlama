<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<center>
		<?php

	// session kontrolü yaparak eğer kullanıcı giriş yapmamışsa giriş formunu yapmışsa panel ekranını gösteriyoruz

		if (!isset ($_SESSION['no'])) { ?>

			<h1>Kullanıcı Girişi</h1>
			<hr>
			<br>

			<form action="index.php" method="post">
				Öğrenci No: <input type="text" name="no" required>
				Parola: <input type="text" name="parola" required>
				<input type="submit" value="Giriş Yap" name="giris">
			</form>

			<?php 

			if (isset($_POST['giris'])) {
	// formdan gelen verileri karşılaştırıyoruz. tanımladığımız giriş bilgileri doğrumu kontrol ediyoruz

				if ($_POST['no']=="12345" && $_POST['parola']=="1416") {

		//Giriş bilgileri doğruysa session atama işlemleri yapıyoruz

					$_SESSION['no']=$_POST['no'];
					$_SESSION['parola']=$_POST['parola'];

		// Yönlendirme işlemi yapıyoruz. İşlem sonucu takip için durum GET değişkenini tanımlıyoruz

					header("Location:index.php?durum=#");
					exit;
				}
				else{
		// İşlem başarısız olduğu zaman işlem sonucu takip için durum GET değişkeni tanımlıyoruz
					header("Location:index.php?durum=no");
					exit;
				}
			}

		// İşlemlerden GET değeri döndürüyoruz. Bu sayede işlem durumunu takip edebiliyoruz
			if ($_GET['durum']=="no") {
				echo "<br>";
				echo "Giriş başarısız, lütfen tekrar deneyiniz!";
				header("Refresh: 5; url=http://localhost/D%C3%B6nem%20Notu%20Hesaplama%20Projesi");
			} 
			else if ($_GET['durum']=="cikis") {
				echo "<br>";
				echo "Başarıyla çıkış yapıldı!";
				header("Refresh: 5; url=http://localhost/D%C3%B6nem%20Notu%20Hesaplama%20Projesi");
			}

			?>	
		<?php } else{ ?>

			<center>
				<!-- Kullancı giriş yapınca göserilecek panel alanı -->
				<h1>Dönem Ortalaması Hesapla</h1>

				<p> <?php echo $_SESSION['no'] ?> numaralı öğrenci hoşgeldiniz!</p>
				<hr>		

				<form action="index.php" method="POST">
					<label for="ders1">1. Ders:</label>
					<input type="number" name="vize1" placeholder="Vize Notunuzu Giriniz">
					<input type="number" name="final1" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders2">2. Ders:</label>
					<input type="number" name="vize2" placeholder="Vize Notunuzu Giriniz"> 
					<input type="number" name="final2" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders3">3. Ders:</label>
					<input type="number" name="vize3" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final3" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders4">4. Ders:</label>
					<input type="number" name="vize4" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final4" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders5">5. Ders:</label>
					<input type="number" name="vize5" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final5" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders6">6. Ders:</label>
					<input type="number" name="vize6" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final6" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders7">7. Ders:</label>
					<input type="number" name="vize7" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final7" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders8">8. Ders:</label>
					<input type="number" name="vize8" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final8" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders9">9. Ders:</label>
					<input type="number" name="vize9" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final9" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<label for="ders10">10. Ders:</label>
					<input type="number" name="vize10" placeholder="Vize Notunuzu Giriniz" >
					<input type="number" name="final10" placeholder="Final  Notunuzu Giriniz" >
					<br>
					<button type="submit">Hesapla</button>
				</form>
				<hr>
				Tekrar denemek için <a href="index.php">tıklayınız</a> 
				<br>
				<a href="cikis.php"><button>Çıkış Yap</button></a>
				<br>	
				<hr>
			</center>

			<?php
			if (isset($_POST['vize1']) && isset($_POST['final1'])) {

				$vize1 = $_POST['vize1'];
				$final1 = $_POST['final1'];

				if ($vize1 <0 || $final1 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize1*0.4)+($final1*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 1. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 1. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize2']) && isset($_POST['final2'])) {
				$vize2 = $_POST['vize2'];
				$final2 = $_POST['final2'];

				if ($vize2 <0 || $final2 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize2*0.4)+($final2*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 2. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 2. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize3']) && isset($_POST['final3'])) {
				$vize3 = $_POST['vize3'];
				$final3 = $_POST['final3'];

				if ($vize3 <0 || $final3 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize3*0.4)+($final3*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 3. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 3. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize4']) && isset($_POST['final4'])) {
				$vize4 = $_POST['vize4'];
				$final4 = $_POST['final4'];

				if ($vize4 <0 || $final4 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize4*0.4)+($final4*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 4. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 4. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize5']) && isset($_POST['final5'])) {
				$vize5 = $_POST['vize5'];
				$final5 = $_POST['final5'];

				if ($vize5 <0 || $final5 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize5*0.4)+($final5*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 5. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 5. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize6']) && isset($_POST['final6'])) {
				$vize6 = $_POST['vize6'];
				$final6 = $_POST['final6'];

				if ($vize6 <0 || $final6 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize6*0.4)+($final6*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 6. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 6. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize7']) && isset($_POST['final7'])) {
				$vize7 = $_POST['vize7'];
				$final7 = $_POST['final7'];

				if ($vize7 <0 || $final7 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize7*0.4)+($final7*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 7. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 7. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize8']) && isset($_POST['final8'])) {
				$vize8 = $_POST['vize8'];
				$final8 = $_POST['final8'];

				if ($vize8 <0 || $final8 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize8*0.4)+($final8*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 8. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 8. dersten $ortalama ile kaldınız.</p>";
				}

			}	
			if (isset($_POST['vize9']) && isset($_POST['final9'])) {
				$vize9 = $_POST['vize9'];
				$final9 = $_POST['final9'];

				if ($vize9 <0 || $final9 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize9*0.4)+($final9*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 9. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 9. dersten $ortalama ile kaldınız.</p>";
				}

			}
			if (isset($_POST['vize10']) && isset($_POST['final10'])) {
				$vize10 = $_POST['vize10'];
				$final10 = $_POST['final10'];

				if ($vize10 <0 || $final10 <0) {
					echo "<p style='margin:15px'>Vize veya final notu 0'dan küçük olamaz !</p>";
					die;
				}

				$ortalama = ($vize10*0.4)+($final10*0.6);

				if ($ortalama=="0") {
					die;
				}

				if ($ortalama>50) {
					echo "<p style='margin:15px'>Tebrikler 10. dersi $ortalama ile geçtiniz.</p>";
				}else{
					echo "<p style='margin:15px'>Maalesef 10. dersten $ortalama ile kaldınız.</p>";
				}

			}
			?>

			<?php
		}
			?>
	</center>

</body>
</html>