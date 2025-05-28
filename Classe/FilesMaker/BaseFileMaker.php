<?php
namespace Classe\FilesMaker;
abstract class BaseFileMaker
{
    protected string $chemin;
    protected string $titreprojet;
    public function __construct(string $chemin, string $titre)
    {
        $this->chemin = $chemin;
        $this->titreprojet = $titre;
    }
    public function makeFile(): void
    {
        $this->createFile();
    }
    abstract protected function createFile(): void;


    abstract protected function putContent(): string;
}
