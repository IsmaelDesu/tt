<?php
if (isset($_POST['response']) && $_POST['response'] === 'yes') {
    // Ajoute "oui" dans le fichier response.txt
    file_put_contents("/response.txt", "oui\n", FILE_APPEND);
}

// Redirige l'utilisateur vers la page d'accueil ou une page de confirmation
header('/lastpage.html'); // Ajustez le chemin si nécessaire
exit();
