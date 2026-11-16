<?php
require_once './Badge.php';
require_once './calculerfacture.php';
require_once './filtrer.php';
require_once './labels.php';
require_once './config.php';
$patients =[
      ['id' => 1, 'nom' => 'Ahmed', 'age' => 30, 'code_service' => 'Cardio', 'urgence' => 'Rouge'],
      ['id' => 2, 'nom' => 'Fatma', 'age' => 70, 'code_service' => 'DERMA', 'urgence' => 'Orange'],
      ['id' => 3, 'nom' => 'Ali', 'age' => 50, 'code_service' => 'PEDIATRIE', 'urgence' => 'Vert'],
      ['id' => 4, 'nom' => 'Sami', 'age' => 80, 'code_service' => 'Cardio', 'urgence' => 'Rouge'],
];
$urgence= filtrerUrgence($patients, 'Rouge');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrer Patients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grille"> 
        <?php 
        foreach ($patients as $patient): 
        ?>
        <?php
            $badge = getBadgeService($patient['code_service']); 
            $libelleStatut = getLibelleUrgence($patient['urgence']);
            $prix = calculerFacture($patient['age'], TARIF_BASE_CONSULTATION);
            ?>
    <article class="carte statut-<?= $patient['urgence']; ?>">
                <h2><?= $patient['nom']; ?> (<?= $patient['age']; ?> ans)</h2>
                <span class="badge <?= $badge['classe']; ?>">
                    <?= $badge['code_service']; ?>
                </span>
                <p><strong>Urgence:</strong> <?= $libelleStatut; ?></p>
                <p><strong>Prix estimé:</strong> <?= $prix; ?> TND</p>
                
            </article> 
            
        <?php 
        endforeach; 
        ?>
        </div> 
   <section class="recapitulatif">
    <h2>Récapitulatif</h2>
            <p><strong>Nombre de patients en urgence:</strong> <?= count($urgence); ?></p>
            <h3>Patient en urgence</h3>
            <ul>
                <?php foreach ($urgence as $urgence): ?>
                    <?php $badge=getBadgeService($urgence['urgence']); ?>
                    <li><?= $urgence['nom'] ?> -<?= $badge ['code_service'];?></li>
                    <?php endforeach; ?>
            </ul>
    </section>

</body>
</html>