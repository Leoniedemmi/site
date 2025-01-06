<?php
// Démarrer la session
session_start();

// Initialiser le panier si ce n'est pas déjà fait
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Ajouter un produit au panier
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Vérifier si le produit est déjà dans le panier
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1
        ];
    }

    header('Location: panier.php'); // Redirige vers la page du panier
    exit();
}

// Supprimer un produit du panier
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
    header('Location: panier.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
    <link rel="stylesheet" href="css/cart_style.css">
</head>
<body>
    <header>
        <h1>Votre Panier</h1>
        <section class="menu">
        <h2><a href="index.php">Continuer les achats</a></h2>
</section>
    </header>
    <main>
        <?php if (!empty($_SESSION['cart'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($_SESSION['cart'] as $id => $product): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($product['name']); ?></td>
                            <td><?php echo number_format($product['price'], 2); ?>€</td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td><?php echo number_format($product['price'] * $product['quantity'], 2); ?>€</td>
                            <td>
                                <a href="panier.php?remove=<?php echo $id; ?>">Supprimer</a>
                            </td>
                        </tr>
                        <?php $total += $product['price'] * $product['quantity']; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>Total : <?php echo number_format($total, 2); ?>€</p>
        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
    </footer>
</body>
</html>
