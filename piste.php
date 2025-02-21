<!-- Exemple de page pour la catégorie "Ski de piste" -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski de Piste</title>
    <link rel="stylesheet" href="css/page.css">
    <?php include 'ariane.php'; ?>
    <link rel="stylesheet" href="css/ariane.css">
</head>
<body>
    <header>
        <h1>Piste</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="randonner.php">Ski de Randonnée</a></li>
                <li><a href="piste.php">Ski de Piste</a></li>
                <li><a href="fond.php">Ski de Fond</a></li>
                <li><a href="freestyle.php">Ski Freestyle</a></li>
                <li><a href="snowboard.php">Snowboard</a></li>
                <li><a href="panier.php">Panier</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
            <?php echo generate_breadcrumb(); ?>
            <p>Vous êtes sur la page <?php echo ucfirst(str_replace('_', ' ', pathinfo($current_page, PATHINFO_FILENAME))); ?></p>
    </div>
    <main>
        <section class="category">
            <h2>Nos produits "Ski de Piste"</h2>
            <div class="product-list">
                <div class="product-card">
                    <a href="descriptif/descriptif1piste.php"><img src="img/ski_de_piste/HEAD_REBELS_389,90.png" alt="Ski de Piste 1"></a>  
                    <h3>HEAD - REBELS</h3>
                    <p>Prix : 389,90€</p>
                    <form action="panier.php" method="GET">
                        <input type="hidden" name="product_id" value="piste1">
                        <input type="hidden" name="product_name" value="Ski de Piste Head Rebels">
                        <input type="hidden" name="product_price" value="450">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <div class="product-card">
                    <a href="descriptif/descriptif2piste.php"><img src="img/ski_de_piste/HEAD_SHAPE_324,90.png" alt="Ski de Piste 2"></a>  
                    <h3>HEAD - SHAPE</h3>
                    <p>Prix : 324,90€</p>
                    <form action="panier.php" method="GET">
                        <input type="hidden" name="product_id" value="piste2">
                        <input type="hidden" name="product_name" value="Ski de Piste Head Shape">
                        <input type="hidden" name="product_price" value="520">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <div class="product-card">
                    <a href="descriptif/descriptif3piste.php"><img src="img/ski_de_piste/ROSSIGNOL_NOVA4_291,90.png" alt="Ski de Piste 3"></a>  
                    <h3>ROSSIGNOL - NOVA 4</h3>
                    <p>Prix : 291,90€</p>
                    <form action="panier.php" method="GET">
                        <input type="hidden" name="product_id" value="piste3">
                        <input type="hidden" name="product_name" value="Ski de Piste Rossignol Nova 4">
                        <input type="hidden" name="product_price" value="600">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
        <p>Adresse : 15 rue Germaine Tailleferre, 91200 Athis-Mons - Téléphone : 01 69 38 45 38</p>
        <p><a href="mention.php">Mentions légales</a></p>
    </footer>
</body>
</html>
