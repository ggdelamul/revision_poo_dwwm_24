<?php
require __DIR__ .DIRECTORY_SEPARATOR. 'Classe'.DIRECTORY_SEPARATOR.'Commande'.DIRECTORY_SEPARATOR.'Commande.php';
require __DIR__ .DIRECTORY_SEPARATOR. 'Classe'.DIRECTORY_SEPARATOR.'Commande'.DIRECTORY_SEPARATOR.'DirectoryCommand.php';
require __DIR__ .DIRECTORY_SEPARATOR. 'Classe'.DIRECTORY_SEPARATOR.'Commande'.DIRECTORY_SEPARATOR.'GitCommand.php';
require __DIR__ .DIRECTORY_SEPARATOR. 'Classe'.DIRECTORY_SEPARATOR.'Commande'.DIRECTORY_SEPARATOR.'NpmCommand.php';
require __DIR__ .DIRECTORY_SEPARATOR. 'Classe'.DIRECTORY_SEPARATOR.'FilesMaker'.DIRECTORY_SEPARATOR.'BaseFileMaker.php';
require __DIR__ .DIRECTORY_SEPARATOR. 'Classe'.DIRECTORY_SEPARATOR.'FilesMaker'.DIRECTORY_SEPARATOR.'HtmlFileMaker.php';

use Classe\Commande\CommandeLanceur;
use Classe\Commande\DirectoryCommand;
use Classe\FilesMaker\HtmlFileMaker;

$chemin = getenv('USERPROFILE').DIRECTORY_SEPARATOR.'desktop'.DIRECTORY_SEPARATOR.'RevisionPOO';
echo $chemin;
//affichage du menu et récupération du choix utilisateur
$choix = CommandeLanceur::showMenu();
//récupérartion du nom du projet
$projetName = CommandeLanceur::createProjetDirectory();
echo $projetName;
$directoryCommand = new DirectoryCommand($chemin);
$directoryCommand->executeCommande();
switch($choix)
{
    case 1 :
        //créer le projet html css js 
        $htmlFile = new HtmlFileMaker($chemin, $projetName);
        $htmlFile->MakeFile();
        // ici donner la possibilité de créer un repo git 
        break;
    case 2 :
        //créer le projet PHP
        echo "création du projet php" .$choix. PHP_EOL;
        break;
    case 3 :
        //créer le projet vue //Attention plus complexe avec des notions complementaires à rechercher 
        echo "création du projet vue" .$choix. PHP_EOL;
        break;
    default: 
        break;
}