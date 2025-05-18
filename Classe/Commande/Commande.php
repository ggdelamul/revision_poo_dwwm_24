<?php
namespace Classe\Commande;

abstract class CommandeLanceur {
    
    protected string $cheminDossier ;
    protected static string $nomProjet;
    //constructeur utiliser à l'instanciation
    protected function __construct($chemin )
    {
        $this-> cheminDossier = $chemin;
    }

    public static function showMenu(): int
    {
        // Affichage du menu utilisateur
        echo " 
        1. Créer un projet statique (HTML, CSS, JavaScript)\n
        2. Créer un projet PHP\n
        3. Créer un projet Vue.js\n
        ";

        $choixValides = [1, 2, 3]; // Liste des choix autorisés

        // Boucle jusqu'à ce que l'utilisateur saisisse une valeur valide
        do {
            $saisie = (int) readline("Saisir le chiffre correspondant à votre choix : ");
            
            if (in_array($saisie, $choixValides, true)) {
                // Affichage de confirmation
                echo "Vous avez choisi l'option : $saisie\n";
                
                return $saisie; // Retour immédiat du choix valide
            } else {
                echo "Choix invalide, veuillez réessayer.\n";
            }

        } while (true); // Boucle infinie, arrêt uniquement via return
    }
    //methode statique quipermet de stocker le nom du projet ayu niveau de la classe parente et de la récupérer sur le code appelant 
    public static function createProjetDirectory(): string {
        self::$nomProjet = readline("Entrez le nom de votre projet: ");
        return self::$nomProjet;
    }

    //methode abstraite à implémenter dans les classes en enfants 
    abstract function executeCommande():void;

}