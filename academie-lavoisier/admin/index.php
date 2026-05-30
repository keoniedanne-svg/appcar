<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

if (!ADMIN_LOGGED_IN) {
    redirect('../?page=accueil');
}

$page = $_GET['page'] ?? 'dashboard';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="../assets/admin-style.css">
</head>
<body>
    <div class="admin-container">
        <aside class="admin-sidebar">
            <div class="sidebar-brand">
                <h2>Admin Panel</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="?page=dashboard" class="nav-item <?php echo $page === 'dashboard' ? 'active' : ''; ?>">📊 Tableau de bord</a>
                <a href="?page=actualites" class="nav-item <?php echo $page === 'actualites' ? 'active' : ''; ?>">📰 Actualités</a>
                <a href="?page=equipe" class="nav-item <?php echo $page === 'equipe' ? 'active' : ''; ?>">👥 Équipe</a>
                <a href="?page=etablissements" class="nav-item <?php echo $page === 'etablissements' ? 'active' : ''; ?>">🏫 Établissements</a>
                <a href="?page=adhesions" class="nav-item <?php echo $page === 'adhesions' ? 'active' : ''; ?>">📋 Adhésions</a>
                <a href="logout.php" class="nav-item nav-logout">🚪 Déconnexion</a>
            </nav>
        </aside>

        <main class="admin-content">
            <?php
            $admin_pages = ['dashboard', 'actualites', 'equipe', 'etablissements', 'adhesions'];
            if (in_array($page, $admin_pages)) {
                include "pages/{$page}.php";
            } else {
                include "pages/dashboard.php";
            }
            ?>
        </main>
    </div>
</body>
</html>