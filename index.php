<html>
<form action="" method="get">
    <input type="number" name="angka1" placeholder="angka 1">
    <input type="number" name="angka2" placeholder="angka 2">
    <button type="submit">HASILNYA</button>
</form>
</html>
<h1>

<?php
    $no1 = $_GET['angka1'];
    $no2 = $_GET['angka2'];
    $hasil = $no1 + $no2;
 echo "hasilnya = $hasil"; ?>
</h1>