<?php 

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Plaything.php";
require_once __DIR__ . "/classes/Accessory.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/objects/food_objs.php";
require_once __DIR__ . "/objects/accessory_objs.php";
require_once __DIR__ . "/objects/plaything_objs.php";

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
            <article class="food item-card">
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
            <article class="food item-card">
                <div class="item-img">
                    <img src="<?php echo $foodArticle2->getImgUrl(); ?>" alt="<?php echo $foodArticle2->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $foodArticle2->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $foodArticle2->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $foodArticle2->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $foodArticle2->getWeight(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $foodArticle2->getIngredients(); ?>
                    </p>
                </div>
            </article>
            <article class="food item-card">
                <div class="item-img">
                    <img src="<?php echo $foodArticle3->getImgUrl(); ?>" alt="<?php echo $foodArticle3->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $foodArticle3->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $foodArticle3->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $foodArticle3->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $foodArticle3->getWeight(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $foodArticle3->getIngredients(); ?>
                    </p>
                </div>
            </article>
            <article class="food item-card">
                <div class="item-img">
                    <img src="<?php echo $foodArticle4->getImgUrl(); ?>" alt="<?php echo $foodArticle4->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $foodArticle4->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $foodArticle4->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $foodArticle4->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $foodArticle4->getWeight(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $foodArticle4->getIngredients(); ?>
                    </p>
                </div>
            </article>
            <article class="accessory item-card">
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
            <article class="accessory item-card">
                <div class="item-img">
                    <img src="<?php echo $accessoryArticle2->getImgUrl(); ?>" alt="<?php echo $accessoryArticle2->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $accessoryArticle2->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $accessoryArticle2->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $accessoryArticle2->getPrice(); ?>
                    </p>
                    <p class="item-Material">
                        <?php echo $accessoryArticle2->getMaterial(); ?>
                    </p>
                    <p class="item-size">
                        <?php echo $accessoryArticle2->getSize(); ?>
                    </p>
                </div>
            </article>
            <article class="plaything item-card">
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
            <article class="plaything item-card">
                <div class="item-img">
                    <img src="<?php echo $playthingArticle2->getImgUrl(); ?>" alt="<?php echo $playthingArticle2->getName(); ?>">
                </div>
                <div class="item-info">
                    <h2 class="item-name">
                        <?php echo $playthingArticle2->getName(); ?>
                    </h2>
                    <p class="item-category">
                        <?php echo $playthingArticle2->getCategory()->getName(); ?>
                    </p>
                    <p class="item-price">
                        <?php echo $playthingArticle2->getPrice(); ?>
                    </p>
                    <p class="item-weight">
                        <?php echo $playthingArticle2->getCharacteristic(); ?>
                    </p>
                    <p class="item-ingredients">
                        <?php echo $playthingArticle2->getSize(); ?>
                    </p>
                </div>
            </article>
        </section>
    </main>
</body>
</html>