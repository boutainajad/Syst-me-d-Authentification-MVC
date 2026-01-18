<?php $pageTitle = 'Tableau de bord Candidat'; ?>
<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div class="container">
    <div class="dashboard-header">
        <h1>Tableau de bord Candidat</h1>
        <p class="subtitle">Gérez vos candidatures et votre profil</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">📝</div>
            <div class="stat-content">
                <h3>Candidatures</h3>
                <p class="stat-number">0</p>
                <small>Aucune candidature</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">👁️</div>
            <div class="stat-content">
                <h3>Vues du profil</h3>
                <p class="stat-number">0</p>
                <small>Cette semaine</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">✉️</div>
            <div class="stat-content">
                <h3>Messages</h3>
                <p class="stat-number">0</p>
                <small>Aucun nouveau message</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">⭐</div>
            <div class="stat-content">
                <h3>Offres sauvegardées</h3>
                <p class="stat-number">0</p>
                <small>Aucune offre sauvegardée</small>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="card">
            <div class="card-header">
                <h3>Offres d'emploi</h3>
            </div>
            <div class="card-body">
                <p>Découvrez les dernières opportunités qui correspondent à votre profil.</p>
                <button class="btn btn-outline" disabled>Parcourir les offres</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Mon profil</h3>
            </div>
            <div class="card-body">
                <p>Complétez votre profil pour augmenter vos chances d'être recruté.</p>
                <button class="btn btn-outline" disabled>Modifier le profil</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Mes candidatures</h3>
            </div>
            <div class="card-body">
                <p>Suivez l'état de vos candidatures en cours.</p>
                <button class="btn btn-outline" disabled>Voir mes candidatures</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>CV et documents</h3>
            </div>
            <div class="card-body">
                <p>Gérez vos CV, lettres de motivation et autres documents.</p>
                <button class="btn btn-outline" disabled>Gérer les documents</button>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>