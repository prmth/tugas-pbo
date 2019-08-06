<?php
// inisiasi variabel
$a = "USS Enterprise";
$b = "Menurut catatan kapten";
$c = "Mengunjungi Planet Vulcan;
// alternatif pertama
$alt1 = $a . " " . $c . ", " . $b . ".";
// alternatif kedua
$alt2 = $b . ", " . $a . " " . $c . ".";
?>
<html>
<head>
<title>Menggabungkan String</title>
</head><body>
String yang pertama adalah: <br>
<?php echo $alt1; ?>
<br><br>
String yang kedua adalah: <br>
<?php echo $alt2; ?>
</body>
</html>