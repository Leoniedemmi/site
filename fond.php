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
        <h1>Ski de Piste</h1>
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
            <h2>Nos produits "Ski de Fond"</h2>
            <div class="product-list">
                <div class="product-card">
                    <a href="descriptif/descriptif1fond.php"><img src="img/ski_de_fond/ATOMIC_PRO_239,99.png" alt="Ski de Piste 1"></a>
                    <h3>ATOMIC - PRO</h3>
                    <p>Prix : 239,99€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste1">
                        <input type="hidden" name="product_name" value="Ski de Piste X1">
                        <input type="hidden" name="product_price" value="450">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <div class="product-card">
                    <a href="descriptif/descriptif2fond.php"><img src="img/ski_de_fond/FISCHER_AEROLITE90_399,00.png" alt="Ski de Piste 2"></a>  
                    <h3>FISCHER - AEROLITE 90</h3>
                    <p>Prix : 399,00€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste2">
                        <input type="hidden" name="product_name" value="Ski de Piste Y2">
                        <input type="hidden" name="product_price" value="520">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <div class="product-card">
                    <a href="descriptif/descriptif3fond.php"><img src="img/ski_de_fond/SALOMON_RS10_307,99.png" alt="Ski de Piste 3"></a>  
                    <h3>SALOMON - RS10</h3>
                    <p>Prix : 307,99€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste3">
                        <input type="hidden" name="product_name" value="Ski de Piste Z3">
                        <input type="hidden" name="product_price" value="600">
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
