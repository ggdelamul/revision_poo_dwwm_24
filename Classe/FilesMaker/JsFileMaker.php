<?php
namespace Classe\FilesMaker;
class JsFileMaker extends BaseFileMaker {

    public function  createFile(): void {
        $nomFichier = readline("saisir le nom du fichier js(sans extension): ");
        $nomFichier = trim($nomFichier.'.js');
        file_put_contents($this->chemin . '/' .$nomFichier , $this->putContent());
    }
    public function putContent(): string {
        return "console.log('script connecté')";
    }
}