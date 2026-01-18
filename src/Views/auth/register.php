<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - TalentHub</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">

            <?php if (!empty($error)): ?>
                <div class="alert alert-error">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="post" action="/register" class="auth-form">
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Jean Dupont" 
                           value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="votreemail@exemple.com" 
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                    <small>Minimum 6 caractères</small>
                </div>

                <div class="form-group">
                    <label for="role">Type de compte</label>
                    <select id="role" name="role" required>
                        <option value="">Sélectionnez un rôle</option>
                        <option value="candidate" <?php echo (($_POST['role'] ?? '') === 'candidate') ? 'selected' : ''; ?>>
                            Candidat
                        </option>
                        <option value="recruiter" <?php echo (($_POST['role'] ?? '') === 'recruiter') ? 'selected' : ''; ?>>
                            Recruteur
                        </option>
                        <option value="admin" <?php echo (($_POST['role'] ?? '') === 'admin') ? 'selected' : ''; ?>>
                            Administrateur
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>

            <div class="auth-footer">
                <p>Déjà inscrit ? <a href="/login">Se connecter</a></p>
            </div>
        </div>
    </div>
</body>
</html>