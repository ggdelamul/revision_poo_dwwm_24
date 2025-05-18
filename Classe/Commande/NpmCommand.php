<?php
namespace Classe\Commande;
Class NpmCommand extends CommandeLanceur{
    private string $command = 'npm init -y';
    public function __construct($chemin)
    {
        parent::__construct($chemin);
    }

    public function executeCommande(): void
    { 
        $cheminComplet = rtrim($this->cheminDossier, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . self::$nomProjet;
        $cmd = 'cd ' . escapeshellarg($cheminComplet) . ' && ' . $this->command . ' 2>&1';
        $output = shell_exec($cmd);
        echo "<pre>$output</pre>";
    }
}
