<?php
$mhs1 = ["id"=> 1, "NIM"=> "011022202", "UTS"=> 90,"UAS"=> 95, "Tugas"=> 90];
$mhs2 = ["id" => 2,"NIM" => "011022201","UTS" => 76,
"UAS" => 90,"Tugas" => 95];
$mhs3 = ["id" => 3,"NIM" => "011022203","UTS" => 80,"UAS" => 85,"Tugas" => 94];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUgas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Nomor</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
            <?php
                foreach($ar_nilai as $nilai){
                    $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['Tugas'])/3;?>
            <tr>
                <td><?= $nilai["id"];?></td>
                <td><?= $nilai["NIM"];?></td>
                <td><?= $nilai["UTS"];?></td>
                <td><?= $nilai["UAS"];?></td>
                <td><?= $nilai["Tugas"];?></td>
                <td><?= number_format($nilai_akhir,1,'.',',');?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>