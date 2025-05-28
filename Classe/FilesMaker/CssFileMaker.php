<?php
namespace Classe\FilesMaker;
class CssFileMaker extends BaseFileMaker {

    public function  createFile(): void {
        $nomFichier = readline("saisir le nom du fichier css(sans extension): ");
        $nomFichier = trim($nomFichier.'.css');
        file_put_contents($this->chemin . '/' .$nomFichier , $this->putContent());
    }
    public function putContent(): string {
        return "h1 { color:red;}";
    }
}