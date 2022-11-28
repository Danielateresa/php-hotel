<?php
/* Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella */

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <ul>
        <div class="container">
            <h1 class="text-center my-3">Info Hotel</h1>
            <div class="row  h-100">

                <div class="col g-0">
                    <?php foreach($hotels as $hotel) : ?>
                    <div class="box border"><?php echo $hotel ?></div>
                    <?php endforeach; ?>
                </div>

                <?php foreach($hotels as $hotel) : ?>
                <div class="col g-0 h-100">
                    <div class="box border"><?php echo $hotel['name'] ?></div>
                    <div class="box border"><?php echo $hotel['description'] ?></div>
                    <div class="box border"><?php if($hotel['parking']) {
                        echo 'Parking available';
                    } else {
                        echo 'No parking';
                    } ?></div>
                    <div class="box border"><?php echo $hotel['vote'] ?></div>
                    <div class="box border"><?php echo $hotel['distance_to_center'] ?></div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>

</body>

</html>