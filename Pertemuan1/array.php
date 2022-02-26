<?php
    $mahasiswa = ['Mohamad', 'Hafizh', 'Ashifani'];
    echo $mahasiswa[0];
    echo '_';
    echo $mahasiswa[1];
    echo '_';
    echo $mahasiswa[2];
    echo '<br>';
    echo '<br>';
    //foreach
    foreach($mahasiswa as $nama){
        echo $nama;
    }
    //multidimention
    $mahasiswa = [
        ["nama" => "Hafizh", "nim" => "010101010", "Uts" => 100, "Uas" => 80],
        ["nama" => "Mohamad", "nim" => "020202020", "Uts" => 70, "Uas" => 50]
    ];
    
    foreach($mahasiswa as $mhs){
        echo $mhs["nama"];
    };
    
?>