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

// On récupère le droit de l'utilisateur connecté
// création du manager de droit qui nous connecte à la DB (avec affichage erreur)
   
    
    
    // si on trouve l'admin (un utilisateur en tout cas)
 
// on appel la/les vue pour les afficher
        // include 'vue/adminVue.php';
include 'vue/testVue.php';

