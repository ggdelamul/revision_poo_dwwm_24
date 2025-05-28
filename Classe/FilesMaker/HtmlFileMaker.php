<?php
namespace Classe\FilesMaker;
class HtmlFileMaker extends BaseFileMaker {

    public function createFile(): void {
        $nomFichier = readline("Saisir le nom du fichier HTML (sans extension) : ");
        $nomFichier = trim($nomFichier . '.html');
    
        $dossierProjet = $this->chemin . DIRECTORY_SEPARATOR . $this->titreprojet;
    
        file_put_contents($dossierProjet . DIRECTORY_SEPARATOR . $nomFichier, $this->putContent());
    }
    
    public function putContent(): string {
        return <<<HTML
        <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>$this->titreprojet</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <h1>$this->titreprojet</h1>
            </body>
            </html>       
HTML;
    }
}