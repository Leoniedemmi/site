<?php
// Récupérer l'ID du produit
$product_id = $_GET['id'] ?? null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails produit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="randonner.php">ski randonner</a></li>
                <li><a href="piste.php">ski de piste</a></li>
                <li><a href="fond.php">ski de fond</a></li>
                <li><a href="freestyle.php">ski freestyle</a></li>
                <li><a href="snowboard.php">snowboard</a></li>
        </nav>
    </header>
    <main>
        <section class="product-detail">
            <?php if ($product_id == 1): ?>
                <img src="img/ski1.jpg" alt="Ski 1">
                <h1>Ski X</h1>
                <p>Prix : 299€</p>
                <p>Description du produit...</p>
            <?php elseif ($product_id == 2): ?>
                <img src="img/ski2.jpg" alt="Ski 2">
                <h1>Ski Y</h1>
                <p>Prix : 399€</p>
                <p>Description du produit...</p>
            <?php else: ?>
                <p>Produit non trouvé.</p>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
    </footer>
</body>
</html>
