<!-- Exemple de page pour la catégorie "Ski de piste" -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski de Piste</title>
    <link rel="stylesheet" href="css/style.css">
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
                <!-- Produit 1 -->
                <div class="product-card">
                    <img src="img/ski_piste_1.jpg" alt="Ski de Piste 1">
                    <h3>Ski de Piste X1</h3>
                    <p>Prix : 450€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste1">
                        <input type="hidden" name="product_name" value="Ski de Piste X1">
                        <input type="hidden" name="product_price" value="450">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <!-- Produit 2 -->
                <div class="product-card">
                    <img src="img/ski_piste_2.jpg" alt="Ski de Piste 2">
                    <h3>Ski de Piste Y2</h3>
                    <p>Prix : 520€</p>
                    <form action="panier.php" method="POST">
                        <input type="hidden" name="product_id" value="piste2">
                        <input type="hidden" name="product_name" value="Ski de Piste Y2">
                        <input type="hidden" name="product_price" value="520">
                        <button type="submit" name="add_to_cart">Ajouter au panier</button>
                    </form>
                </div>
                <!-- Produit 3 -->
                <div class="product-card">
                    <img src="img/ski_piste_3.jpg" alt="Ski de Piste 3">
                    <h3>Ski de Piste Z3</h3>
                    <p>Prix : 600€</p>
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
