<?php 
require_once 'nilai_mahasiswa.php';

$data_mhs =[]

// Data Awal
$data_mhs[] = new NilaiMahasiswa("Hakim", "Pemograman Web", 30, 25, 15);
$data_mhs[] = new NilaiMahasiswa("Ihsan", "Pemograman Web", 30, 25, 15);
$data_mhs[] = new NilaiMahasiswa("Kaff", "Pemograman Web", 30, 25, 15);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Input Data Mahasiswa</h3>

    <form action="POST" action="">
        <label for="">Nama</label>
        <input type="text" name="nama" id=""><br></br>
        <label for="">Matkul</label>
        <input type="text" name="">
        <label for=""><label name="">
        <input type="text" name="">
        <label for=""></label>
        <input type="text" name="">

</form>

<h3>Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="5" cellpadding="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Kelulusan</th>
            </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach($data_mhs as $mhs){
        echo "<tr>";
        echo "<td>". $nomor."</td>";
        echo "<td>". $mhs->nama."</td>";
        echo "<td>". $mhs->matakuliah."</td>";
        echo "<td>". $mhs->nilai_uts."</td>";
        echo "<td>". $mhs->nilai_uas."</td>";
        echo "<td>". $mhs->nilai_tugas."</td>";
        echo "<td>". number_format($mhs->getNA(), 2). "</td>";
        echo "<td>". $mhs->kelulusan()."</td>"
        echo "</tr>";
        $nomor++;
    }
    ?>
</body>
</html>