<?php
/*
fungsi salam dengan paramenter $nama
*/
function salam($nama="Nurul Fikri"){
    echo "Hello, selamat pagi! ".$nama;
}
?>
<h1>Belajar Fungsi</h1>
<?php
    salam("Rizzal");
    echo "<br>";
    salam();
?>
