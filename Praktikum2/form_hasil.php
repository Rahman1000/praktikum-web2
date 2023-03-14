<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>nama</th>
                <th>mata kuliah</th>
                <th>tugas</th>
                <th>uts</th>
                <th>uas</th>
                <th>total nilai</th>
                <th>keterangan</th>
            </tr>
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
            ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $matkul;?></td>
                <td><?= $TUGAS;?></td>
                <td><?= $UTS;?></td>
                <td><?= $UAS;?></td>
                <td><?= $total_nilai;?></td>
                <td><?= $keterangan;?></td>
            </tr>
            <?php }?>

        </table>
    </div>
</body>
</html>