<?php 

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Plaything.php";
require_once __DIR__ . "/classes/Accessory.php";
require_once __DIR__ . "/classes/Category.php";

$article1 = new Food ("Royal Canin Mini Adult","43,99", "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", new Category("Cane"), "prosciutto, Riso", 545);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>
            Boolshop
        </h1>
    </header>
    <main>
        <section class="article-wrapper">
            <article class="item-card">
                <div class="item-img">
                    <img src="<?php echo $article1->getImgUrl(); ?>" alt="<?php echo $article1->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $article1->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $article1->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $article1->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $article1->getWeight(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $article1->getIngredients(); ?>
                    </p>
                </div>
            </article>
        </section>
    </main>
</body>
</html>