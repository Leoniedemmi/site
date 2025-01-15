<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Définir la page d'accueil
$home_page = 'site/index.php';

// Vérifier si nous sommes sur la page d'accueil
if (basename($_SERVER['PHP_SELF']) == basename($home_page)) {
    // Si c'est la page d'accueil, réinitialiser le fil d'Ariane
    $_SESSION['breadcrumb'] = [$home_page];
} else {
    // Récupérer la page actuelle
    $current_page = basename($_SERVER['PHP_SELF']);
    $current_dir = basename(dirname($_SERVER['PHP_SELF']));

    // Réinitialiser le fil d'Ariane si nécessaire
    if (!isset($_SESSION['breadcrumb']) || end($_SESSION['breadcrumb']) == $home_page || $current_page == 'index.php') {
        $_SESSION['breadcrumb'] = [$home_page];
    }

    // Ajouter la page actuelle au fil d'Ariane si elle n'y est pas déjà
    $current_path = ($current_dir == '.' ? '' : $current_dir . '/') . $current_page;
    if (in_array($current_path, $_SESSION['breadcrumb'])) {
        // Retirer toutes les pages après la page actuelle
        $index = array_search($current_path, $_SESSION['breadcrumb']);
        $_SESSION['breadcrumb'] = array_slice($_SESSION['breadcrumb'], 0, $index + 1);
    } else {
        $_SESSION['breadcrumb'][] = $current_path;
    }
}

// Générer le fil d'Ariane
function generate_breadcrumb() {
    $breadcrumb = "<nav aria-label='breadcrumb'><ol class='breadcrumb'>";
    foreach ($_SESSION['breadcrumb'] as $page) {
        $breadcrumb .= "<li class='breadcrumb-item'><a href='/" . ltrim($page, '/') . "'>" . ucfirst(str_replace('_', ' ', pathinfo($page, PATHINFO_FILENAME))) . "</a></li>";
    }
    $breadcrumb .= "</ol></nav>";
    return $breadcrumb;
}
?>