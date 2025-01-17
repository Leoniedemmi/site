<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="css/paiement.css">
</head>
<body>
    <header>
        <h1>Ça Glisse</h1>
    </header>
    <main>
        <form action="confirmation.php" method="post" class="payment-form">
            <h1>Informations de Paiement</h1>
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="address">Adresse :</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div>
                <label for="city">Ville :</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div>
                <label for="postal_code">Code Postal :</label>
                <input type="text" id="postal_code" name="postal_code" required>
            </div>
            <div>
                <label for="country">Pays :</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div>
                <label for="card_number">Numéro de Carte :</label>
                <input type="text" id="card_number" name="card_number" required>
            </div>
            <div>
                <label for="expiry_date">Date d'Expiration :</label>
                <input type="text" id="expiry_date" name="expiry_date" required>
            </div>
            <div>
                <label for="cvv">CVV :</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit">Valider l'achat</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Magasin de Ski</p>
    </footer>
</body>
</html>