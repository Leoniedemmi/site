
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski de Piste X1</title>
    <link rel="stylesheet" href="../css/product.css">
    <?php include '../ariane.php'; ?>
    <link rel="stylesheet" href="../css/ariane.css">
</head>
<body>
    <header>
        <h1>Magasin de Ski</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../randonner.php">Ski de Randonnée</a></li>
                <li><a href="../piste.php">Ski de Piste</a></li>
                <li><a href="../fond.php">Ski de Fond</a></li>
                <li><a href="../freestyle.php">Ski Freestyle</a></li>
                <li><a href="../snowboard.php">Snowboard</a></li>
                <li><a href="../panier.php">Panier</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
            <?php echo generate_breadcrumb(); ?>
            <p>Vous êtes sur la page <?php echo ucfirst(str_replace('_', ' ', pathinfo($current_page, PATHINFO_FILENAME))); ?></p>
    </div>
    <main>
        <section class="product-detail">
            <div class="product-container">
                <img src="../img/ski_de_rando/VOLKL_RISEUP_384,90.png" alt="Ski de Piste X1" class="product-image">
                <div class="product-info">
                    <h2>VOLKL - RISE UP</h2>
                    <p>Prix : 384,90€</p>
                    <p>
                        Les skis de randonnée "RISE UP" sont conçu pour les skieurs exigeants, offrant une excellente stabilité, 
                        maniabilité et performance sur les pistes damées. Idéal pour les amateurs comme pour les experts.
                    </p>
                    <form action="../quantite.php" method="GET">
                        <input type="hidden" name="product_id" value="piste1">
                        <input type="hidden" name="product_name" value="Ski de randonnée Rise Up">
                        <input type="hidden" name="product_price" value="450">
                        <label for="quantity">Quantité :</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" required>
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
    </footer>
</body>
</html>
