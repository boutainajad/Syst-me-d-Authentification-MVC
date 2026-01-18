<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'TalentHub'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <h2>TalentHub</h2>
            </div>
            <div class="navbar-menu">
                <?php if (isset($_SESSION['user'])): ?>
                    <span class="navbar-user">
                        👤 <?php echo htmlspecialchars($_SESSION['user']['name']); ?>
                        <span class="badge"><?php echo htmlspecialchars($_SESSION['user']['role']); ?></span>
                    </span>
                    <a href="/logout" class="btn btn-outline">Se déconnecter</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    
    <main class="main-content">