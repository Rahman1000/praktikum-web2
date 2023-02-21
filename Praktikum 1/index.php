<?php

// echo "Hallo World! <br>";
// print_r("Nama Saya Agam <br>");
// var_dump("kuliah di STT Nurul Fikri");

// Membuat Variabel user
// $nama = 'Agam';
// $umur = 19;
// $berat = 70.2;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur tahun <br>";
// echo "Berat badan saya adalah $berat kg <br>";

// membuat variabel sistem
// echo "Document root : " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
// echo "Nama File " . $_SERVER['PHP_SELF'] . "<br>";


// membuat variabel knstanta
// define('PHI', 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari = $jari adalah $luas <br>";
// echo "Keliling lingkaran dengan jari-jari = $jari adalah $keliling <br>";

// membuat array
$programs = ["php", "java", "python", "c++", "c#"];
echo $programs[0] . "<br>";
echo count($programs);
$programs[] = "Mysql";
echo count($programs);

// unset($programs[0]);
// echo "<br>" . $programs[0];

echo "<ol>";
foreach($programs as $program){
    echo "<li>$program</li>";
}
echo "</ol>";


?>