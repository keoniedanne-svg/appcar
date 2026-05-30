<?php
$etablissements = Database::getAll('etablissements');
?>

<section class="container">
    <div class="section-title">
        <h2>Établissements</h2>
    </div>

    <?php if (empty($etablissements)): ?>
        <div class="empty-state">
            <p>Aucun établissement pour le moment</p>
        </div>
    <?php else: ?>
        <div class="etablissements-grid">
            <?php foreach ($etablissements as $etab): ?>
            <div class="etablissement-card">
                <?php if (!empty($etab['logo'])): ?>
                    <img src="uploads/logos/<?php echo h($etab['logo']); ?>" alt="<?php echo h($etab['nom']); ?>" class="logo">
                <?php else: ?>
                    <div class="no-logo">🏫</div>
                <?php endif; ?>
                <h3><?php echo h($etab['nom']); ?></h3>
                <p><strong>Ville:</strong> <?php echo h($etab['ville']); ?></p>
                <p><strong>Directeur:</strong> <?php echo h($etab['directeur']); ?></p>
                <p><strong>Discord:</strong> <a href="<?php echo h($etab['discord']); ?>" target="_blank">Rejoindre</a></p>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>