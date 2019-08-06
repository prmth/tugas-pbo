<html>
<head>
<title>Geordi dan Daftar Peralatan Yang Dibeli</title>
<?php include 'include.php';?>
</head>
<body>
<center>
<table border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4" align="center" valign="middle">
<b>Daftar Pemesanan Peralatan Geordi La Forge - NCC1701D</b>
</td>
</tr>
<tr>
<td><b>Nama Peralatan</b></td>
<td><b>Jumlah</b></td>
<td><b>Harga Satuan</b></td>
<td><b>Jumlah Harga</b></td>
</tr>
<?php
// Mulai untuk mengisi tabel daftar dengan data yang ada
?>
<tr>
<td align="left"><?php echo $alat_geordi1; ?>Phaser</td>
<td align="right"><?php echo $jumlah_alat_geordi1; ?>2</td>
<td align="right"><?php echo $harga_alat_geordi1; ?>7500</td>
<td align="right"><?php echo $total_alat_geordi1; ?>15000</td>
</tr>
<tr>
<td align="left"><?php echo $alat_geordi2; ?>Tricorder</td>
<td align="right"><?php echo $jumlah_alat_geordi2; ?>5</td>
<td align="right"><?php echo $harga_alat_geordi2; ?>12500</td>
<td align="right"><?php echo $total_alat_geordi2; ?>62500</td>
</tr>
<tr>
<td align="left"><?php echo $alat_geordi3; ?>Visor</td>
<td align="right"><?php echo $jumlah_alat_geordi3; ?>1</td>
<td align="right"><?php echo $harga_alat_geordi3; ?>16000</td>
<td align="right"><?php echo $total_alat_geordi3; ?>16000</td>
</tr>
<tr>
<td align="left"><?php echo $alat_geordi4; ?>Analyzer Photonik</td>
<td align="right"><?php echo $jumlah_alat_geordi4; ?>3</td>
<td align="right"><?php echo $harga_alat_geordi4; ?>2300</td>
<td align="right"><?php echo $total_alat_geordi4; ?>6900</td>
</tr>
<tr>
<td colspan="3" align="right">Total Harga</td>
<td align="right"><?php echo $total_harga; ?>100400</td>
</tr>
<tr>
<td colspan="3" align="right">Diskon <?php echo "( $diskon % )"; ?></td>
<td align="right"><?php echo $nilai_diskon; ?>5020</td>
</tr>
<tr>
<td colspan="3" align="right">Jumlah harus dibayar</td>
<td align="right"><?php echo $total_harga_dibayar; ?>95380</td>
</tr>
</table>
</center>
</body>
</html>



