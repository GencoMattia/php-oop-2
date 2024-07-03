<?php 

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Plaything.php";
require_once __DIR__ . "/classes/Accessory.php";
require_once __DIR__ . "/classes/Category.php";

$foodArticle1 = new Food (
    "Royal Canin Mini Adult",
    "43,99", 
    "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", 
    new Category("Cane"), 
    "prosciutto, Riso", 
    545
);
$accessoryArticle1 = new Accessory (
    "Voliera Wilma in Legno",
    "184,99", 
    "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", 
    new Category("Uccello"), 
    "Legno", 
    "M: L.83 x P.67 x H.153"
);
$playthingArticle1 = new Plaything (
    "Kong Classic",
    "13,49",
    "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg",
    new Category("Cane"),
    "Galleggia e rimbalza",
    "8,5 cm x 10 cm"
);

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
        <section>
            <h1>
                Boolshop
            </h1>
        </section>
    </header>
    <main>
        <section class="main-header">
            <h1>
                I nostri prodotti
            </h1>
        </section>
        <section class="article-wrapper">
            <article class="item-card">
                <div class="item-img">
                    <img src="<?php echo $foodArticle1->getImgUrl(); ?>" alt="<?php echo $foodArticle1->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $foodArticle1->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $foodArticle1->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $foodArticle1->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $foodArticle1->getWeight(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $foodArticle1->getIngredients(); ?>
                    </p>
                </div>
            </article>
            <article class="item-card">
                <div class="item-img">
                    <img src="<?php echo $accessoryArticle1->getImgUrl(); ?>" alt="<?php echo $accessoryArticle1->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $accessoryArticle1->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $accessoryArticle1->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $accessoryArticle1->getPrice(); ?>
                    </p>
                    <p class="item-Material">
                        <?php echo $accessoryArticle1->getMaterial(); ?>
                    </p>
                    <p class="item-size">
                        <?php echo $accessoryArticle1->getSize(); ?>
                    </p>
                </div>
            </article>
            <article class="item-card">
                <div class="item-img">
                    <img src="<?php echo $playthingArticle1->getImgUrl(); ?>" alt="<?php echo $playthingArticle1->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $playthingArticle1->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $playthingArticle1->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $playthingArticle1->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $playthingArticle1->getCharacteristic(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $playthingArticle1->getSize(); ?>
                    </p>
                </div>
            </article>
        </section>
    </main>
</body>
</html>