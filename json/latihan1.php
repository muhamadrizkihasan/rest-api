<?php
    $mahasiswa = [
        "nama" => "jabdjab",
        "nrp" => "2112414d",
        "email" => "sanjdnakjdn"
    ];

    // var_dump($mahasiswa);

    // Merubah data array assosiative menjadi json
    $data = json_encode($mahasiswa);
    echo $data;
?>