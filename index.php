<!-- filepath: /Applications/MAMP/htdocs/site/index.php -->
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

    <section class="header">
        <header>
            <nav>
                <ul>
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
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="product-card">
                        <img src="img/ski_de_fond/ATOMIC_PRO_239,99.png" alt="Ski 1">
                    </div>
                    <div class="product-card">
                        <img src="img/ski_de_piste/HEAD_SHAPE_324,90.png" alt="Ski 2">
                    </div>
                    <div class="product-card">
                        <img src="img/ski_de_rando/VOLKL_RISEUP_384,90.png" alt="Ski 1">
                    </div>
                    <div class="product-card">
                        <img src="img/ski_freestyle/ARV_84_253,90.png" alt="Ski 2">
                    </div>
                    <div class="product-card">
                        <img src="img/snowboard/JONES_WEAVER_543,80.png" alt="Ski 2">
                </div>
            </div>
        </section>
    </main>

    <script src="js/carousel.js"></script>
</body>
</html>