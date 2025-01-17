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
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    // Validation de la quantité (éviter les quantités non valides)
    $quantity = max(1, $quantity);

    // Vérifier si le produit est déjà dans le panier
    if (isset($_SESSION['cart'][$product_id])) {
        // Ajouter la quantité choisie au produit existant
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        // Ajouter un nouveau produit avec la quantité choisie
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $quantity
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
