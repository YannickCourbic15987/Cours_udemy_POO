<?php

class Voiture
{

    public function __construct(
        private string $marque,
        private string $modele,
        private string $couleur,
        private int $nbPorte,
        private bool $estElectrique
    ) {
    }

    public function getMarque(): string
    {
        return $this->marque;
    }
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getNbPorte(): int
    {
        return $this->nbPorte;
    }

    public function setNbPorte(int $nbPorte): void
    {
        $this->nbPorte = $nbPorte;
    }
    public function getEstElectrique(): bool
    {
        return $this->estElectrique;
    }

    public function setEstElectrique(bool $estElectrique): void
    {
        $this->estElectrique = $estElectrique;
    }

    public function afficherVoiture()
    {
        echo "la voiture a pour marque : " . $this->marque . "<br/>";
        echo "la voiture a pour modele : " . $this->modele . "<br/>";
        echo "la voiture a pour couleur : " . $this->couleur . "<br/>";
        if ($this->estElectrique === true) {
            echo "la voiture " . $this->modele . " est une voiture électrique";
        } else {
            echo "la voiture " . $this->modele . " n'est pas  une voiture électrique";
        }
    }
}

$v1 = new Voiture("Toyota", "Ryas", "noir", 5, true);
$v2 = new Voiture("Toyota", "Risau", "rouge", 3, false);
$v3 = new Voiture("Troen", "Picasso", "rouge", 5, true);

$v1->afficherVoiture();
echo " <br/> ===================== <br/>";
$v2->afficherVoiture();
echo "<br/> ===================== <br/>";
$v3->afficherVoiture();
