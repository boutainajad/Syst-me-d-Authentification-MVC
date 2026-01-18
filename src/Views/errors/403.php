<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Accès refusé</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <h1>403</h1>
            <h2>Accès refusé</h2>
            <p>Vous n'avez pas la permission d'accéder à cette page.</p>
            <div class="error-actions">
                <a href="/login" class="btn btn-primary">Retour à la connexion</a>
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="/<?php echo $_SESSION['user']['role']; ?>/dashboard" class="btn btn-outline">Mon tableau de bord</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>