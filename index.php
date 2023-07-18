<?php

include 'includes/data/hotels.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>
    <main>
        <section id="hotels">
            <h1>Hotels </h1>
            <ul>
                <?php foreach ($hotels as $hotel) : ?>
                    <li>
                        <h2>Name: <?= $hotel['name']; ?></h2>
                        <p>Description: <?= $hotel['description']; ?></p>
                        <p>Parking: <?= $hotel['parking'] ? 'Available' : 'Not available'; ?></p>
                        <p>Vote: <?= $hotel['vote']; ?></p>
                        <p>Distance to centre: <?= $hotel['distance_to_center']; ?> km</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>

</html>