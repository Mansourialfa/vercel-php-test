<?php
// Données des équipes nationales
// Pour l'instant, c'est un simple tableau. Plus tard, on pourra connecter une base de données.
$equipes = [
    [
        "nom" => "Équipe de France",
        "palmares" => "2 Coupes du Monde, 2 Championnats d'Europe"
    ],
    [
        "nom" => "Brésil",
        "palmares" => "5 Coupes du Monde, 9 Copa América"
    ],
    [
        "nom" => "Argentine",
        "palmares" => "3 Coupes du Monde, 15 Copa América"
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palmarès des Équipes Nationales</title>
    
    <!-- On lie notre feuille de style CSS qui est dans le dossier public -->
    <link rel="stylesheet" href="../public/style.css">
    
    <!-- On importe une police depuis Google Fonts pour un plus joli rendu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Palmarès des Équipes Nationales</h1>
        <div class="cards-container">
            <?php foreach ($equipes as $equipe): ?>
                <div class="card">
                    <h2><?php echo htmlspecialchars($equipe['nom']); ?></h2>
                    <p><?php echo htmlspecialchars($equipe['palmares']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <footer>
            <p>Projet déployé sur Vercel</p>
        </footer>
    </div>
</body>
</html>