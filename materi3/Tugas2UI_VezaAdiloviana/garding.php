<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/style/garding.css">
    <title>Document</title>
</head>

<body>
    <?php 
         $daftarkelas = array('Kelas-1','Kelas-2','Kelas-3');
    ?>
    <div class="row col">

        <div class="content1 col">
            <div class="content mt-5 col-md-12">
                <div class="judul text-center">
                    <h2>Sistem Grade Siswa</h2>
                </div>
                <form action="" method="POST">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $_GET["email"] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="kelas">Kelas</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control"  id="kelas" name="kelas">
                                <option value="" disabled selected>Kelas</option>
                                <?php
                               foreach ($daftarkelas as $kelas) {
                                   echo "<option value=".$kelas.">".$kelas."</option>";
                               }
                               ?>
                            </select>
                        </div>
                    </div>

                    <div class="input mt-5 text-center">
                        <h2>Input Nilai Siswa</h2>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="nama">Matematika</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="mtk" name="mtk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="nama">Fisika</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="fisika" name="fisika">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="nama">Biologi</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="biologi" name="biologi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="nama">TIK</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="tik" name="tik">
                        </div>
                    </div>
                    <div class="button text-right pb-3">
                        <button type="submit" name="btnsbm" class="btn btn-secondary" >Submit</button>
                    </div>
                </form>
            </div>

        </div>

        <?php
        
        function total() {
            $mtk = $_POST['mtk'];
            $fisika = $_POST['fisika'];
            $biologi = $_POST['biologi'];
            $tik = $_POST['tik'];
            return($mtk + $fisika + $biologi + $tik);
        }
        function rata()
        {
            $pembagi = 4;
            return ( total() / $pembagi);
        }
        function grade() {
            if(rata() >= 80 ) {
                return('A');
            } elseif (rata() >= 60 && rata() < 80 ) {
                return('B');
            } elseif (rata() >= 50 && rata() < 60 ) { 
                return('C');
            } else {
                return('D');
            }
        }
        ?>

        <div class="content2 col">
            <div class="content mt-5 col-md-12">
                <div class="judul2 text-center">
                    <h2>Hasil Penilaian</h2>
                </div>
            </div>
            <div class="col">
                <label for="nama" name="email">Nama Siswa    : 
                    <?php 
                        if (isset($_POST['email'])) {
                            echo $_POST["email"];
                        }
                        ?>
                </label >
            </div>
            <div class="col">
                <label for="kelas" name="kelas" >Kelas : 
                    <?php 
                        if (isset($_POST['kelas'])) {
                            echo $_POST["kelas"];
                        }
                        ?>
                </label >
            </div>

            <h2></h2>
            <div class="col">
                <label for="mtk" name="mtk" >Nilai Matematika   : 
                    <?php 
                        if (isset($_POST['mtk'])) {
                            echo $_POST["mtk"];
                        }
                        ?>
                </label >
            </div>
            <div class="col">
                <label for="fisika" name="fisika">Nilai Fisika   :
                    <?php 
                        if (isset($_POST['fisika'])) {
                            echo $_POST["fisika"];
                        }
                        ?>
                </label >
            </div>
            <div class="col">
                <label for="biologi" name="biologi">Nilai Biologi   : 
                    <?php 
                        if (isset($_POST['biologi'])) {
                            echo $_POST["biologi"];
                        }
                        ?>
                </label >
            </div>
            <div class="col">
                <label for="tik" name="tik">Nilai TIK   :
                    <?php 
                        if (isset($_POST['tik'])) {
                            echo $_POST["tik"];
                        }
                        ?>
                </label >
            </div>

            <h2></h2>
            <div class="col">
                <label for="rata">Nilai Rata-Rata   :
                    <?php 
                        if (isset($_POST['btnsbm'])) {
                            echo rata();
                        }
                        ?>
                </label >
            </div>
            <div class="col">
                <label for="total">Total Nilai   : 
                    <?php 
                        if (isset($_POST['btnsbm'])) {
                            echo total();
                        }
                        ?>
                </label >
            </div>
            <div class="col">
                <label for="mtk">Grade Nilai   : 
                    <?php 
                        if (isset($_POST['btnsbm'])) {
                            echo grade();
                        }
                        ?>
                </label >
            </div>
        </div>

    </div>
</body>

</html>