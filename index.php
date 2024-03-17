<?php
require_once __DIR__ . '/classes/item.php';
require_once __DIR__ . '/classes/pet.php';
require_once __DIR__ . '/classes/tag.php';
require_once __DIR__ . '/database/db.php';

function getHtmlClass($tag)
{
    if ($tag == 'Gioco') {
        return 'toy';
    } elseif ($tag == 'Cibo') {
        return 'food';
    } elseif ($tag == 'Igiene') {
        return 'healthy';
    } elseif ($tag == 'Addestramento') {
        return 'teaching';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <!-- Import Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Import Font Awesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
</head>

<body>

    <header>
        <div class="container my-3">
            <h1>Pet e-commerce</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row g-3">
                <?php foreach ($items as $item) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card h-100">
                            <div class="card-header fw-bold d-flex justify-content-between">
                                <?= $item->item ?>
                                <ul class="list-unstyled m-0">
                                    <?php foreach ($item->pets as $pet) : ?>
                                        <li class="d-inline-block"><?= ($pet->petType == 'Cane') ? '<i style="color: brown" class="fa-solid fa-dog"></i>' : '<i style="color: orange" class="fa-solid fa-cat"></i>' ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="card-body">
                                <img class="w-100" src="<?= $item->img ?>" alt="<?= $item->description ?>">
                                <hr>
                                <p class="m-0"><?= $item->description ?></p>
                                <p class="fw-bold m-0">€ <?= number_format($item->price, 2, ',', '.') ?></p>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled m-0">
                                    <?php foreach ($item->tags as $tag) : ?>
                                        <li class="d-inline-block <?= getHtmlClass($tag->tag) ?> mb-1"><?= $tag->tag ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

</body>

</html>