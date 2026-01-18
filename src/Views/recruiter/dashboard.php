<?php $pageTitle = 'Tableau de bord Recruteur'; ?>
<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div class="container">
    <div class="dashboard-header">
        <h1>Tableau de bord Recruteur</h1>
        <p class="subtitle">Gérez vos offres et candidatures</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">💼</div>
            <div class="stat-content">
                <h3>Offres actives</h3>
                <p class="stat-number">0</p>
                <small>Aucune offre publiée</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">📩</div>
            <div class="stat-content">
                <h3>Candidatures reçues</h3>
                <p class="stat-number">0</p>
                <small>Cette semaine</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">👤</div>
            <div class="stat-content">
                <h3>Entretiens planifiés</h3>
                <p class="stat-number">0</p>
                <small>Aucun entretien prévu</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">✅</div>
            <div class="stat-content">
                <h3>Recrutements</h3>
                <p class="stat-number">0</p>
                <small>Ce mois-ci</small>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="card">
            <div class="card-header">
                <h3>Mes offres d'emploi</h3>
            </div>
            <div class="card-body">
                <p>Créez et gérez vos offres d'emploi.</p>
                <button class="btn btn-primary" disabled>Créer une offre</button>
                <button class="btn btn-outline" disabled>Voir toutes les offres</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Candidatures reçues</h3>
            </div>
            <div class="card-body">
                <p>Consultez et gérez les candidatures reçues pour vos offres.</p>
                <button class="btn btn-outline" disabled>Voir les candidatures</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Rechercher des candidats</h3>
            </div>
            <div class="card-body">
                <p>Recherchez des candidats correspondant à vos critères.</p>
                <button class="btn btn-outline" disabled>Rechercher</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Statistiques</h3>
            </div>
            <div class="card-body">
                <p>Consultez les statistiques de vos offres et recrutements.</p>
                <button class="btn btn-outline" disabled>Voir les stats</button>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>