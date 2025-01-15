
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
                <img src="../img/ski_de_piste/ROSSIGNOL_NOVA4_291,90.png" alt="Ski de Piste X1" class="product-image">
                <div class="product-info">
                    <h2>ROSSIGNOL - NOVA 4</h2>
                    <p>Prix : 291,90€</p>
                    <p>
                        ROSSIGNOL est une marque faite pour les débutant. Les "NOVA 4" sont les skis les plus avancés dans la gamme débutante offrant une stabilité équilibrée, 
                        maniabilité sur les pistes damées. Idéal pour les novices comme pour les experts.
                    </p>
                    <form action="../quentite.php" method="POST">
                        <input type="hidden" name="product_id" value="piste1">
                        <input type="hidden" name="product_name" value="Ski de Piste X1">
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
