<?php

// Inclure l'autoloader de Laravel
require __DIR__ . '/bootstrap/autoload.php';

// Charger l'application Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';

// Résoudre le kernel console
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Exécuter la migration
echo "Exécution des migrations...<br>";
$kernel->call('migrate');
echo "Les migrations ont été exécutées avec succès.<br>";

// Créer le lien symbolique
echo "Création du lien symbolique...<br>";
$storagePath = getenv('HOME') . '/home/ymh-officiel/storage/app/public';
$publicPath = getenv('HOME') . '/htdocs/storage';

$command = "ln -s $storagePath $publicPath";

// Exécuter la commande shell
exec($command, $output, $resultCode);

if ($resultCode === 0) {
    echo "Le lien symbolique a été créé avec succès.<br>";
} else {
    echo "Erreur lors de la création du lien symbolique.<br>";
    print_r($output);
}

echo "Script terminé.";
