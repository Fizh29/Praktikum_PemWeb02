<?php
// function perkenalan(){
//     echo "Perkenalkan Nama saya Mohamad Hafizh";
// }
// perkenalan();


// function perkenalan($nama){
//     echo "Perkenalkan nama saya adalah ". $nama;

// }
// perkenalan("Mohamad Hafizh Ashifani")
//paratemer default

// function perkenalan($nama = "Mohamad"){
//     echo "Perkenalkan nama saya adalah " . $nama;
// }
// perkenalan();


// function luaspersegi($sisi){
//     $rumus = $sisi * $sisi;
//     return $rumus;

// }

// echo "Luasnya adalah ". luaspersegi(10);


///
// function hitungumur($thn_lhr, $thn_skrng){
//     $umur = $thn_skrng - $thn_lhr;
//     return $umur;
// }

// echo "Umur si saya adalah ". hitungumur(2003, 2022);
//
function luaslingkaran($jari){
    $phi = 3.14;
    $rumus = $phi * $jari * $jari;
    return $rumus;
}

echo "Luas lingkaran dengan jari jari 2 adalah ". luaslingkaran(2);


?>