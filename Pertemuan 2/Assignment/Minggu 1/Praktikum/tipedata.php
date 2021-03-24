<?php
$nim = "A11.2019.11680";
$nama = "Ida Bagus Putu Wira Kusuma";
$umur = "21";
$nilai = 90.00;
$status = TRUE;
echo "NIM : ". $nim ."<br>";
echo "Nama : $nama <br>";
print "Umur : ". $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
    if($status)
        echo "Status : Aktif";
    else
        echo "Status : Tidak Aktif";
?>;