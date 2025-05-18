<?php
namespace Classe\Commande;

class DirectoryCommand extends CommandeLanceur {

    // Constructeur public, appel du constructeur parent
    public function __construct(string $chemin) {
        parent::__construct($chemin);
    }

    // Implémentation de la méthode abstraite
    public function executeCommande(): void{
        $chemin = rtrim($this->cheminDossier.DIRECTORY_SEPARATOR.self::$nomProjet);
        mkdir($chemin);
    }
}
