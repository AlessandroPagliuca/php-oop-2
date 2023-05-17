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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>php-oop-2</title>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center bg-dark">
        <div class="container h-100 pt-5">
            <div class="row justify-content-center align-items-start">
                <?php foreach ($products as $product) { ?>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p>
                                    <?php echo $product->getTitle(); ?>
                                </p>
                                <p>
                                    <?php echo $product->getPrice(); ?> €
                                </p>
                                <i class="<?php echo $product->getIconCategory(); ?>"></i>
                                <p>
                                    <?php echo $product->getType(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


    </main>
</body>

</html>