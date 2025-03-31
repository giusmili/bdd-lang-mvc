<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="<?= style ?>">
</head>
<body>
    <header>
        <h1>Liste des Utilisateurs</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Langage</th>
                <th>Type</th>
                <th>Utilisation</th>
            </tr>
        </thead>
        <tbody>  
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= htmlspecialchars($user['id_rang']) ?></td>
                <td><?= htmlspecialchars($user['langage']) ?></td>
                <td><?= htmlspecialchars($user['description']) ?></td>
                <td><?= htmlspecialchars($user['utilisation_principale']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>  
    </table>
</body>
</html>
