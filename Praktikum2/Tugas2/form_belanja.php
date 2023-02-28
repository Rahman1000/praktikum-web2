<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body>
    <h3 class="ml-5">Sistem Penilaian</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form method="post">
                    <h1>Belanja Online</h1>
                    <div class="form-group row">
                        <label for="cs" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_3" type="radio" class="custom-control-input" value="Rice Cooker" required="required"> 
                            <label for="produk_3" class="custom-control-label">Rice Cooker</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <table class="table">
                    <tr class="bg-primary text-white">
                        <th>
                            DAFTAR HARGA
                        </th>
                    </tr>
                    <tr>
                        <td>TV : Rp. 3.000.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas : Rp. 5.000.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : Rp. 2.000.000</td>
                    </tr>
                    <tr>
                        <td>Rice Cooker : Rp. 500.000</td>
                    </tr>
                    <tr class="bg-primary text-white">
                        <th>
                            HARGA DAPAT BERUBAH SETIAP SAAT
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>

    <?php
        if(isset($_POST['submit'])){
            $cs = $_POST['cs'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
            if($produk == "TV"){
                $total_harga = $jumlah * 3000000;
            }else if($produk == "Kulkas"){
                $total_harga = $jumlah * 5000000;
            }else if($produk == "Mesin Cuci"){
                $total_harga = $jumlah * 2000000;
            }else if($produk == "Rice Cooker"){
                $total_harga = $jumlah * 500000;
            }
    ?>
    
    <div class="container">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            <tr class="table-secondary">
                <td><?= $cs;?></td>
                <td><?= $produk;?></td>
                <td><?= $jumlah;?></td>
                <td><?= ('Rp. '.number_format($total_harga,0,".","."));?></td>
            </tr>
        </table>
    </div>

    <?php } ?>

    <footer class="main-footer text-center bg-gray-light">
        <hr>
        &copy; Aulia Rahman
    </footer>

</body>
</html>