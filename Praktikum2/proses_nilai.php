<?php 
if (isset($_POST['submit'])) {
    $nama = $_GET['name'];
    $matkul = $_GET['matkul'];
    $UTS = $_GET['UTS'];
    $UAS = $_GET['UAS'];
    $TUGAS = $_GET['TUGAS'];
    $total_nilai = ($UTS + $UAS + $TUGAS)/3;

    if($total_nilai > 75){
        $keterangan = "Lulus";
    }else{
        $keterangan = "Tidak Lulus";
    }
}
?>