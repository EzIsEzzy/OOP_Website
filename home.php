<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Home</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="store-header">
        <img src="<?= $store->getImage(); ?>" alt="Store Image">
        <h1><?= $store->getName(); ?></h1>
        <p><?= $store->getDescription(); ?></p>
    </div>
    <div class="products">
        <!-- using foreach to fetch all the products added -->
        <?php foreach ($store->getProducts() as $product): ?>
            <div class="product-card">
            <h2 class="product-title"><?= $product->getTitle(); ?></h2>
                <img src="<?= $product->getImage(); ?>" alt="<?= $product->getTitle(); ?>">
                <p class="product-price">$<?= $product->getPrice(); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
