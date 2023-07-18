<?php
// Include Hotels
include 'includes/data/hotels.php';
// Include Icons
include 'includes/data/icons.php';

// Filter hotels with parking
$filtered_hotels = [];

foreach ($hotels as $hotel) {
    if (!isset($_GET['parking']) || ($_GET['parking'] === '1' && $hotel['parking'] === true)) {
        $filtered_hotels[] = $hotel;
    }
};
?>

<!-- Html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>PHP Hotel</title>

    <!-- icons Font Awesome cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        <h1 class="my-5 text-center">Hotels </h1>
    </header>
    <!-- Main -->
    <main>
        <!-- Section -->
        <section id="hotels" class="container">

            <!-- Form -->
            <form method="GET" action="" class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="parking" name="parking">
                    <label class="form-check-label" for="parking">
                        Hotels with parking
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Filter</button>
            </form>

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
                    <?php foreach ($filtered_hotels as $hotel) : ?>
                        <tr>
                            <td class="text-center"><?= $hotel['name']; ?></td>
                            <td class="text-center"><?= $hotel['description']; ?></td>
                            <td class="text-center"><?= $hotel['parking'] ? "$available" : "$not_available"; ?></td>
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