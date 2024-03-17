<?php

class Item
{
    public function __construct(public string $item, public string $description, public string $img, public int $price, public array $tags, public array $pets)
    {
        $this->item = $item;
        $this->description = $description;
        $this->img = $img;
        $this->price = $price;
        $this->tags = $tags;
        $this->pets = $pets;
    }
}

$items = [
    new Item('SK001', 'Osso grattadenti', 'osso.jpg',  10, ['Gioco'], ['Cane']),
    new Item('SK002', 'Palla rimbalzina', 'palla.jpg', 5, ['Gioco', 'Addestramento'], ['Cane', 'Gatto']),
    new Item('SK003', 'Carne in scatola', 'carne.jpg', 15, ['Cibo'], ['Cane']),
    new Item('SK004', 'Croccantini', 'croccantini.jpg', 25, ['Cibo'], ['Cane', 'Gatto']),
    new Item('SK005', 'Lettiera', 'lettiera.jpg', 50, ['Igiene'], ['Gatto'])

];

/* var_dump($items); */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
</head>

<body>

    <header>
        <h1>Pet e-commerce</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($items as $item) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?= $item->item ?>
                            </div>
                            <div class="card-body">
                                <img src="<?= $item->img ?>" alt="<?= $item->description ?>">
                                <p><?= $item->description ?></p>
                                <p><?= $item->price ?></p>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled">
                                    <?php foreach ($item->pets as $pet) : ?>
                                        <li class="d-inline-block"><?= $pet ?></li>
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