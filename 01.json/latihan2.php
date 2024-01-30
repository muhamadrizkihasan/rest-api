<?php
    // Mengambil data array assosiative dari database dan merubah menjadi json
    $dbh = new PDO('mysql:host=localhost;dbname=db_lms_ihatec', 'root', '');
    $db = $dbh->prepare('SELECT * FROM trainings');
    $db->execute();
    $trainings = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($trainings);
    echo $data;
?>