<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once "../../Praktikum3/proses_registrasi.php"
?>
<div class="container">
        <h2>Form Input IT Club GDSC</h2>

        <form method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input" value="Pria"> 
                    <label for="gender_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input" value="Wanita"> 
                    <label for="gender_1" class="custom-control-label">Wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select" required="required">
                    <?php foreach($prodi as $prodi => $value){ ?>
                        <option value="<?= $prodi ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web &amp; Programming</label> 
                <div class="col-8">
                    <?php foreach($skills as $key => $value){ ?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill_<?= $key ?>" type="checkbox" class="custom-control-input" value="<?= $key ?>"> 
                            <label for="skill_<?= $key ?>" class="custom-control-label"><?= $key ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <?php foreach ($domisili as $dom) { ?>
                            <option value="<?= $dom?>"><?=$dom?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <table class="table table-bordered">
            <tr class="table-primary text-uppercase text-center">
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Domisili</th>
                <th>Program Studi</th>
                <th>Skill Web & Programming</th>
                <th>Skor</th>
                <th>Predikat</th>
            </tr>
            <?php 
                if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];
                    $prodi = $_POST['prodi'];
                    $domisili = $_POST['domisili'];
                    $skill = $_POST['skill'];
                    $skor = 0;
                    ?>
            <tr class="text-center">
                <td><?= $nim;?></td>
                <td><?= $nama;?></td>
                <td><?= $email;?></td>
                <td><?= $gender;?></td>
                <td><?= $domisili;?></td>
                <td><?= $prodi;?></td>
                <td>
                <?php 
                foreach($skill as $skill){
                    foreach ($skills as $key => $value) {
                        if ($skill == $key) {
                            $skor += $value;
                        }
                    }
                    echo $skill . "<br>";
                    }?>
                </td>
                <td><?= 
                $skor;
                ?></td>
                <td><?php 
            
                    if($skor == 0){
                        echo  "Tidak Memadai";
                        }elseif($skor > 0 && $skor <= 40){
                            echo  "Kurang";
                        }elseif($skor > 40 && $skor <= 60){
                            echo  "Cukup";
                        }elseif($skor > 60 && $skor <= 100){
                            echo  "Baik";
                        }elseif($skor > 100) {
                            echo  "Sangat Baik";
                        }
                ;?></td>
            </tr>
            <?php }?>
        </table>
    </div>

<?php require_once "layouts/footer.php"; ?>