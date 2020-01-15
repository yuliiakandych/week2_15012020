<?php
    require_once('./admin/functions.php');

    $planetCollection = getPlanetData($pdo);

    var_dump($planetCollection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css">

    <title>The First Three Planets!</title>
</head>
<body>
    <main>
        <h1 class="hidden">The Inner Solar System</h1>
        <h2>The first three planets, closest to Sol:</h2>

        <!-- this is an inline php block -->
        <?php foreach ($planetCollection as $planet) {
            echo '<div class = "planet">' .
                    '<img class="planet-img" src="' . $planet["IMGPATH"] . '" alt="planet image">' .
                    '<h4 class="planet-name">' . $planet["NAME"] . ': ' . $planet["ID"] . '</h4>' . 
                    '<p class="planet-description">' . $planet ["DESCRIPTION"] . '</p>' . 
                '</div>';
          } ?>
        

        <!-- end php block -->
    </main>
</body>
</html>