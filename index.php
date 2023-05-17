<?php

include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Card.php';
include __DIR__ . '/server/server.php';





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-oop-2</title>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center bg-dark">
        <?php foreach ($products as $product) { ?>
            <div class="card">
                <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>
                        <?php echo $product->getTitle(); ?>
                    </p>
                    <p>
                        <?php echo $product->getPrice(); ?> €
                    </p>
                    <img src="<?php echo $product->getIconCategory(); ?>" alt="icon">
                    <p>
                        <?php echo $product->getType(); ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </main>
</body>

</html>