<!-- Exemple de page pour la catégorie "Ski de piste" -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski de Piste</title>
    <link rel="stylesheet" href="css/page.css">
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
    <main>
        <section class="category">
            <h2>Nos produits "Ski de Piste"</h2>
            <div class="product-list">
                <div class="product-card">
                    <a href="descriptif/descriptif1snow.php"><img src="img/snowboard/JONES_WEAVER_543,80.png" alt="Ski de Piste 1"></a>
                    <h3>JONES - WEAVER</h3>
                    <p>Prix : 543,80€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste1">
                        <input type="hidden" name="product_name" value="Ski de Piste X1">
                        <input type="hidden" name="product_price" value="450">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <div class="product-card">
                    <a href="descriptif/descriptif1snow.php"><img src="img/snowboard/NIDECKER_ELLE_366,30.png" alt="Ski de Piste 1"></a>
                    <h3>NIDECKER - ELLE</h3>
                    <p>Prix : 366,30€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste2">
                        <input type="hidden" name="product_name" value="Ski de Piste Y2">
                        <input type="hidden" name="product_price" value="520">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <div class="product-card">
                <a href="descriptif/descriptif3snow.php"><img src="img/snowboard/NIDECKER_ESCAPE_471,30.png" alt="Ski de Piste 3"></a>
                <h3>NIDECKER - ESCAPE</h3>
                    <p>Prix : 471,30€</p>
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
