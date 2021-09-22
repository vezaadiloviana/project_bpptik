<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="angka1">Masukan Bilangan ke-1</label>
        <input type="number" name="angka1" id="angka1">
        <br> <br>
        <label for="angka2">Masukan Bilangan ke-2</label>
        <input type="number" name="angka2" id="angka2">
        <button type="submit" name="btnsubmit">submit</button>
        <hr>
    </form>
    
    <?php
    function jumlah()
    {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        return ($angka1 + $angka2);
    }
    function kurang()
    {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        return ($angka1 - $angka2);
    }
    function bagi()
    {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        return ($angka1 / $angka2);
    }
    function kali()
    {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        return ($angka1 * $angka2);
    }
    ?>
    <?php
    if (isset($_POST['btnsubmit'])) {
        echo "Hasil penjumlahan adalah : ", jumlah(), "<br>";
        echo "Hasil pengurangan adalah : ", kurang(), "<br>";
        echo "Hasil perkalian adalah : ", kali(), "<br>";
        echo "Hasil pembagian adalah : ", bagi(), "<br>";
    }
    ?>

</body>

</html>