<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body background = "musik.jpg">
<marquee> Program untuk mengunggah file dengan format pdf , tokenisasi,stopword removal, dan stemming, hitung vektor dan hitung bobot
</marquee>


<br>
<br>
<br>
<br>
<center>

<a href="upload.php"><input type="button" value="Upload File"/></a> 
<a href="hasil_tokenisasi.php"><input type="button" value="Hasil Tokenisasi"/></a>
<a href="hitungbobot.php" ><input type="button" value="Hitung Bobot"/></a>
<a href="hitungvektor.php"><input type="button" value="Hitung Vektor"/></a>
<a href="query.php"><input type="button" value="Query Boolean"/></a>
<a href="awalquery.php"><input type="button" value="Query tf.idf"/></a>
<a href="download.php" ><input type="button" value="Download File"/></a>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3>PENCARIAN KATA DASAR</h3>


<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
</center>

<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>

</body>
</html>