<?php
// inisiasi variable yang digunakan
// nama peralatan
$alat_geordi1 = "Phaser";
$alat_geordi2 = "Tricorder";
$alat_geordi3 = "Visor";
$alat_geordi4 = "Analyzer Photonik";
// harga per unit peralatan
$harga_alat_geordi1 = 7500;
$harga_alat_geordi2 = 12500;
$harga_alat_geordi3 = 16000;
$harga_alat_geordi4 = 2300;
// jumlah peralatan yang ada
$jumlah_alat_geordi1 = 2;
$jumlah_alat_geordi2 = 5;
$jumlah_alat_geordi3 = 1;
$jumlah_alat_geordi4 = 3;
// total harga per jenis peralatan
$total_alat_geordi1 = $jumlah_alat_geordi1 * $harga_alat_geordi1;
$total_alat_geordi2 = $jumlah_alat_geordi2 * $harga_alat_geordi2;
$total_alat_geordi3 = $jumlah_alat_geordi3 * $harga_alat_geordi3;
$total_alat_geordi4 = $jumlah_alat_geordi4 * $harga_alat_geordi4;
// hitung grand total nilai peralatan Geordi
$total_ harga = $total_alat_geordi1 + $total_alat_geordi2
+ $total_alat_geordi3 + $total_alat_geordi4;
// besar diskon untuk Geordi
$diskon = 5;
// jumlah total diskon yang diberikan kepada Geordi
$nilai_diskon = ($diskon * $total_harga)/100;
// jumlah yang harus dibayar Geordi
$total_harga_dibayar = $total_harga - $nilai_diskon;
?>



