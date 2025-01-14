<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    <form>
        <H1>hasil perhitungan</H1>
        
        <?php
            $angka = $_GET['angka'];
            $angka1 = $_GET['angka1'];
            $operator = $_GET['operator'];
        
            if($operator == '+'){
                $hasil = $angka + $angka1;
            }else if($operator == '-') {
                $hasil = $angka - $angka1;
            }else if($operator == ':') {
                $hasil = $angka / $angka1;
            }else if($operator == 'x') {
                $hasil = $angka * $angka1;
            }else if($operator == "'") {
                $hasil = $angka ** $angka1;
            }
            echo $angka . $operator . $angka1 . '=' .$hasil; 
        ?>
        <a href="index.php">kemabli</a>
        <a type="button" onclick="return window print">print</a>
    </form>
</body>
</html>