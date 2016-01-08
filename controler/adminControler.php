<?php

// pour la connexion PDO
require 'model/maPDOClass.php';
// appel de la classe UserManagerClass
require 'model/UserManagerClass.php';

// Vérification de validité de la session
if (!isset($_SESSION['maclef']) || $_SESSION['maclef'] != session_id()) {
    // destruction de la session
    UserManagerClass::decoUser();
    header("Location: ./");
}



// on appel la vue pour les afficher
// include 'vue/adminVue.php';

echo "Bonjour ADDD";








