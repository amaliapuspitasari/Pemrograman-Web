<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Alifa Salsabila","Bianca Nadiva Zanica","Candra Dwi","Diva Anastasya","Erlina Safira Rahmawati","Fajar Nugraha Abadi","Gani Safirudin","Hana Mawanta Fadlisa","Imroatus Safdia","Jeha Wiridian","Kusuma Indra Bekti","Lusiana Khanza","Monica Afril","Nanda Christy Puspitasari","Orin Dwi Arianti","Panca Mahardika","Qanza Nur Sulesa","Ririn Indrawati","Sari Nirmala Dewi","Tubagus Ryan Efendi","Ulfa Mariana Putri","Vivin Puspitasari","Wahyu Pratama","Xanindya Arum","Yuda Anggara Putra","Zeny Marshela","Amalia Puspitasari","Bianca Mardelina","Caca Mirabela","Daniel Mananta");asort($nama);
$dosen =  array("Endang Kartika Sari, S.Kom., M.T.","Nur Amali M.Kom.");
$kelas=array("PTI-A","PTI-B" );
$nilai= array("A");
$aktif = array("HIMTI");

echo "<p>DATA MAHASISWA<p>";
echo "<p>PROGRAM STUDI PENDIDIKAN TEKNOLOGI INFORMASI<p>";
echo "<P>***********************************************************************************************************************************************************<p>";

function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>User $nrp[$i]<p>";	
	echo "<p>Nama Mahasiswa :	$nama[$i]<p>";
	echo "<p>Kelas	: $kelas[0]<p>";
	echo "<p>Nama Dosen	: $dosen[0]<p>";
	echo "<p>Nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Organisasi :	$aktif[0]  <p>";
	echo "<hr>";


}
	for ($q=15; $q <30 ; $q++) {
	echo "<p>User $nrp[$q]<p>";	
	echo "<p>Nama Mahasiswa :	$nama[$q]<p>";
	echo "<p>Kelas	: $kelas[1]<p>";
	echo "<p>Nama Dosen	: $dosen[1]<p>";
	echo "<p>Nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Organisasi :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>