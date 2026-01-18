<?php $pageTitle = 'Tableau de bord Admin'; ?>
<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div class="container">
    <div class="dashboard-header">
        <h1>Tableau de bord Administrateur</h1>
        <p class="subtitle">Gérez l'ensemble de la plateforme</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-content">
                <h3>Utilisateurs totaux</h3>
                <p class="stat-number">---</p>
                <small>Fonctionnalité à venir</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">💼</div>
            <div class="stat-content">
                <h3>Recruteurs</h3>
                <p class="stat-number">---</p>
                <small>Fonctionnalité à venir</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🎯</div>
            <div class="stat-content">
                <h3>Candidats</h3>
                <p class="stat-number">---</p>
                <small>Fonctionnalité à venir</small>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">📊</div>
            <div class="stat-content">
                <h3>Offres actives</h3>
                <p class="stat-number">---</p>
                <small>Fonctionnalité à venir</small>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="card">
            <div class="card-header">
                <h3>Gestion des utilisateurs</h3>
            </div>
            <div class="card-body">
                <p>Gérez les comptes utilisateurs, modifiez les rôles et surveillez l'activité.</p>
                <button class="btn btn-outline" disabled>Voir les utilisateurs</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Statistiques</h3>
            </div>
            <div class="card-body">
                <p>Consultez les statistiques détaillées de la plateforme.</p>
                <button class="btn btn-outline" disabled>Voir les stats</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Paramètres système</h3>
            </div>
            <div class="card-body">
                <p>Configurez les paramètres généraux de l'application.</p>
                <button class="btn btn-outline" disabled>Paramètres</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Rapports</h3>
            </div>
            <div class="card-body">
                <p>Générez et consultez les rapports d'activité.</p>
                <button class="btn btn-outline" disabled>Générer un rapport</button>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>