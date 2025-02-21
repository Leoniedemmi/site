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
    <header class="header">
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
            <img src="image-removebg-preview-9.png" width=60px height=60px alt="Panier" />
            </a>
        </div>
    </header>

    <section class="header">
        <header>
            <section class="mot">
            <nav>
                <ul>
                    <li><a href="randonner.php">ski de randonnée</a></li>
                    <li><a href="piste.php">ski de piste</a></li>
                    <li><a href="fond.php">ski de fond</a></li>
                    <li><a href="freestyle.php">ski freestyle</a></li>
                    <li><a href="snowboard.php">snowboard</a></li>
                </ul>
            </nav>
            </section>
        </header>
    </section>

    <div class="container">
        <?php echo generate_breadcrumb(); ?>
        <p>Vous êtes sur la page <?php echo ucfirst(str_replace('_', ' ', pathinfo($current_page, PATHINFO_FILENAME))); ?></p>
    </div>

    <main>
        <div class="presentation">
            <h1>Vous êtes chez Ça Glisse, un magasin de vente de tout type de ski et de snowboard, pour les débutants comme pour les experts !</h1>

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
    <section>
        <h2>Présentation de nos produit en action :</h2>
        <a href="https://youtu.be/k12GHIJB92c" class="video-link" alt="vidéo de présentation">Vidéo de présentation</a>
    </section>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
        <p>Adresse : 15 rue Germaine Tailleferre, 91200 Athis-Mons - Téléphone : 01 69 38 45 38</p>
        <p><a id="ml" href="mention.php">Mentions légales</a></p>
    </footer>
</body>
</html>