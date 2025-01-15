<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ça Glisse</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'ariane.php'; $current_page = basename($_SERVER['PHP_SELF']); ?>
    <link rel="stylesheet" href="css/ariane.css">
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header avec Logo, Titre et Panier</title>
</head>
<body>

    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="Plan de travail 1@3x.png" alt="Logo" />
        </div>

        <!-- Titre -->
        <div class="title">
            Ça Glisse
        </div>

        <!-- Panier -->
        <div class="cart">
            <a href="panier.php" title="Voir le panier">
                <img src="image-removebg-preview-9.png" onmouseover="this.src='cadi@3x.png'" onmouseout="this.src='image-removebg-preview-9.png'" width=50px height=50px alt="Panier" />
            </a>
        </div>
    </header>

</body>
<body>
    <section class="header">
    <header>
        <nav>
            <ul>
            <section class="mot">
                <li><a href="randonner.php">ski randonner</a></li>
                <li><a href="piste.php">ski de piste</a></li>
                <li><a href="fond.php">ski de fond</a></li>
                <li><a href="freestyle.php">ski freestyle</a></li>
                <li><a href="snowboard.php">snowboard</a></li>
            </ul>
        </nav>
    </header>
    </section>
    <div class="container">
            <?php echo generate_breadcrumb(); ?>
            <p>Vous êtes sur la page <?php echo ucfirst(str_replace('_', ' ', pathinfo($current_page, PATHINFO_FILENAME))); ?></p>
    </div>
    <main>
        <section class="features">
            <link rel="stylesheet" href="css/produit.css">
            <h2>Nos produits</h2>
            <div class="product-card">
                <img src="img/ski1.jpg" alt="Ski 1">
                <h3>Ski X</h3>
                <p>Prix : 299€</p>
                <a href="randonner.php">Voir plus</a>
            </div>
            <div class="product-card">
                <img src="img/ski2.jpg" alt="Ski 2">
                <h3>Ski Y</h3>
                <p>Prix : 399€</p>
                <a href="piste.php">Voir plus</a>
            </div>
            <div class="product-card">
                <img src="img/ski1.jpg" alt="Ski 1">
                <h3>Ski X</h3>
                <p>Prix : 299€</p>
                <a href="fond.php">Voir plus</a>
            </div>
            <div class="product-card">
                <img src="img/ski2.jpg" alt="Ski 2">
                <h3>Ski Y</h3>
                <p>Prix : 399€</p>
                <a href="freestyle.php">Voir plus</a>
            </div>
            <div class="product-card">
                <img src="img/ski1.jpg" alt="Ski 1">
                <h3>Ski X</h3>
                <p>Prix : 299€</p>
                <a href="snowboard.php">Voir plus</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
    </footer>
</body>
</html>
