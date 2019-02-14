<?php

$total_debet = 0;
$total_kredit = 0;
print_r($rekap);
foreach ($rekap as $row) {
    $jumlah = $row->jumlah;
    $tipe = $row->tipe;
    if($row->tipe=="debet"){
        $total_debet += $jumlah; 
    }else{
        $total_kredit += $jumlah;
    }
    echo $row->nama_akun . " " . $jumlah . "<br>";
} 
echo $total_debet."<br>";
echo $total_kredit."<br>";

?>
