<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Alifa Salsabila","Bianca Nadiva Zanica","Candra Dwi","Diva Anastasya","Erlina Safira Rahmawati","Fajar Nugraha Abadi","Gani Safirudin","Hana Mawanta Fadlisa","Imroatus Safdia","Jeha Wiridian","Kusuma Indra Bekti","Lusiana Khanza","Monica Afril","Nanda Christy Puspitasari","Orin Dwi Arianti","Panca Mahardika","Qanza Nur Sulesa","Ririn Indrawati","Sari Nirmala Dewi","Tubagus Ryan Efendi","Ulfa Mariana Putri","Vivin Puspitasari","Wahyu Pratama","Xanindya Arum","Yuda Anggara Putra","Zeny Marshela","Amalia Puspitasari","Bianca Mardelina","Caca Mirabela","Daniel Mananta");asort($namaasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Alifa Salsabila","Bianca Nadiva Zanica","Candra Dwi","Diva Anastasya","Erlina Safira Rahmawati","Fajar Nugraha Abadi","Gani Safirudin","Hana Mawanta Fadlisa","Imroatus Safdia","Jeha Wiridian","Kusuma Indra Bekti","Lusiana Khanza","Monica Afril","Nanda Christy Puspitasari","Orin Dwi Arianti","Panca Mahardika","Qanza Nur Sulesa","Ririn Indrawati","Sari Nirmala Dewi","Tubagus Ryan Efendi","Ulfa Mariana Putri","Vivin Puspitasari","Wahyu Pratama","Xanindya Arum","Yuda Anggara Putra","Zeny Marshela","Amalia Puspitasari","Bianca Mardelina","Caca Mirabela","Daniel Mananta");rsort($namadesc);

echo "<p>DATA MAHASISWA<p>";
echo "<p>PROGRAM STUDI PENDIDIKAN TEKNOLOGI INFORMASI<p>";
echo "<P>***********************************************************************************************************************************************************<p>";
echo "<p>--------------------------------------------------ASCENDING--------------------------------------------------<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP : $nrpasc[$i]<p>";
	echo "<p>Nama : $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);
echo "<p>--------------------------------------------------DESCENDING--------------------------------------------------<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP : $nrpdesc[$i]<p>";
	echo "<p>Nama : $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>

