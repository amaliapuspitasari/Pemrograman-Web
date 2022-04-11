<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
$nama = array("Alifa Salsabila","Bianca Nadiva Zanica","Candra Dwi","Diva Anastasya","Erlina Safira Rahmawati","Fajar Nugraha Abadi","Gani Safirudin","Hana Mawanta Fadlisa","Imroatus Safdia","Jeha Wiridian","Kusuma Indra Bekti","Lusiana Khanza","Monica Afril","Nanda Christy Puspitasari","Orin Dwi Arianti","Panca Mahardika","Qanza Nur Sulesa","Ririn Indrawati","Sari Nirmala Dewi","Tubagus Ryan Efendi","Ulfa Mariana Putri","Vivin Puspitasari","Wahyu Pratama","Xanindya Arum","Yuda Anggara Putra","Zeny Marshela","Amalia Puspitasari","Bianca Mardelina","Caca Mirabela","Daniel Mananta");
$ipk = array("3.05","3.10","3.15","3.20","3.23");
$rambut = array("Hitam dan Lurus","Hitam dan Ikal");
$bb = array("BB 50kg dan TB 160cm","BB 50kg dan TB 160cm","BB 60kg dan TB 170cm","BB 45kg dan TB 155cm");
$aktif = array("Aktif","Cuti");

echo "<p>DATA MAHASISWA<p>";
echo "<p>PROGRAM STUDI PENDIDIKAN TEKNOLOGI INFORMASI<p>";
echo "<P>***********************************************************************************************************************************************************<p>";
echo "<p>------------------------------------------------------------------if-else--------------------------------------------------------<p>";
if ($nrp[0] == 1) {
	echo "<p>NRP $nrp[0]<p>";
	echo "<p>Nama : $nama[0]<p>";
	echo "<p>IPK : $ipk[0]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";}
if ($nrp[1] == 2) {
	echo "<p>NRP $nrp[1]<p>";
	echo "<p>Nama : $nama[1]<p>";
	echo "<p>IPK : $ipk[4]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[3]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";}
if ($nrp[2] == 3) {
	echo "<p>NRP $nrp[2]<p>";
	echo "<p>Nama : $nama[2]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[3]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";}
if ($nrp[3] == 4) {
	echo "<p>NRP $nrp[3]<p>";
	echo "<p>Nama : $nama[3]<p>";
	echo "<p>IPK : $ipk[0]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[2]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";}
if ($nrp[4] == 5) {
	echo "<p>NRP $nrp[4]<p>";
	echo "<p>Nama : $nama[4]<p>";
	echo "<p>IPK : $ipk[0]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";}

echo "<p>------------------------------------------------------------------switch-case--------------------------------------------------------<p>";
$favcolor = "6";

switch ($favcolor) {
	case "6":
	echo "<p>NRP : $nrp[5]<p>";
	echo "<p>Nama : $nama[5]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$favcolor++;
	break;}
switch ($favcolor){
	case "7":
	echo "<p>NRP : $nrp[6]<p>";
	echo "<p>Nama : $nama[6]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$favcolor++;
	break;}
switch ($favcolor) {
	case "8":
	echo "<p>NRP : $nrp[7]<p>";
	echo "<p>Nama : $nama[7]<p>";
	echo "<p>IPK : $ipk[3]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$favcolor++;
	break;}
switch ($favcolor) {
	case "9":
	echo "<p>NRP : $nrp[8]<p>";
	echo "<p>Nama : $nama[8]<p>";
	echo "<p>IPK : $ipk[1]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$favcolor++;
	break;}
switch ($favcolor) {
	case "10":
	echo "<p>NRP : $nrp[9]<p>";
	echo "<p>Nama : $nama[9]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[3]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$favcolor++;
	break;}

echo "<p>------------------------------------------------------------------do-while--------------------------------------------------------<p>";

$nrpdo = 10;

do {
	echo "<p>NRP $nrp[$nrpdo]<p>";
	echo "<p>Nama : $nama[$nrpdo]<p>";
	echo "<p>IPK : $ipk[1]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$nrpdo++;
} while ($nrpdo <= 14);

echo "<p>------------------------------------------------------------------for-loop--------------------------------------------------------<p>";


for ($nrploop=15;$nrploop<20;$nrploop++){
	echo "<p>NRP : $nrp[$nrploop]<p>";
	echo "<p>Nama : $nama[$nrploop]<p>";
	echo "<p>IPK : $ipk[3]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[2]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";

}
echo "<p>------------------------------------------------------------------while--------------------------------------------------------<p>";


$nrpwhile = 20;

while($nrpwhile <30) {
	echo "<p>NRP : $nrp[$nrpwhile]<p>";
	echo "<p>Nama : $nama[$nrpwhile]<p>";
	echo "<p>IPK : $ipk[4]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p><hr>";
	$nrpwhile++;
}
?>
