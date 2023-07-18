<?php
// Include
include 'includes/data/hotels.php';

?>

<!-- Html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>PHP Hotel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Main -->
    <main>
        <!-- Section -->
        <section id="hotels" class="container">

            <!-- H1 -->
            <h1 class="my-5 text-center">Hotels </h1>

            <!-- Table -->
            <table class="table table-primary">

                <!-- Thead -->
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Parking</th>
                        <th class="text-center">Vote</th>
                        <th class="text-center">Distance to Centre</th>
                    </tr>
                </thead>

                <!-- Tbody -->
                <tbody>
                    <!-- Foreach -->
                    <?php foreach ($hotels as $hotel) : ?>
                        <tr>
                            <td class="text-center"><?= $hotel['name']; ?></td>
                            <td class="text-center"><?= $hotel['description']; ?></td>
                            <td class="text-center"><?= $hotel['parking'] ? 'Available' : 'Not available'; ?></td>
                            <td class="text-center"><?= $hotel['vote']; ?></td>
                            <td class="text-center"><?= $hotel['distance_to_center']; ?> km</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>