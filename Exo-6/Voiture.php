<?php
class ParcAuto
{
    private $voitures;
    public function __construct(
        private string $nom,
        private string $adresse,

    ) {
    }
    public function ajouterVoiture($v)
    {
        $this->voitures[] = $v;
    }



    public  function afficherVoitureMarque($marqueRecherche)
    {
        echo "Voici les véhicules de la marque : " . $marqueRecherche . "<br/> <br/>";

        for ($i = 0; $i < count($this->voitures); $i++) {
            if ($this->voitures[$i]->getMarque() === $marqueRecherche) {
                echo $this->voitures[$i];
            }
        }
    }
}
class Voiture
{
    const  MINI = 3;
    const  NORMAL   = 5;
    const TVA = 0.2;
    // public static array $voitures;

    public function __construct(
        private string $marque,
        private string $modele,
        private string $couleur,
        private int $nbPorte,
        private bool $estElectrique,
        private float $prix,


    ) {
        // self::$voitures[] = $this;
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
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function setPrice(float $prix): void
    {
        $this->prix = $prix;
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
        if (!empty($this->types)) {
            echo "la voiture est de types : " . $this->types . "<br/>";
        }
        echo "le prix HT est de " . $this->prix . " $ <br/>";
        echo "le prix TTC est de " . ($this->prix + ($this->prix * self::TVA)) . " $ <br/>";
        echo " <br/> *********************************************** <br/>";
    }

    public function __toString()
    {
        $txt = "";
        $txt .= "la voiture a pour marque : " . $this->marque . "<br/>";
        $txt .= "la voiture a pour modele : " . $this->modele . "<br/>";
        $txt .= "la voiture a pour couleur : " . $this->couleur . "<br/>";
        if ($this->estElectrique === true) {
            $txt .= "la voiture " . $this->modele . " est une voiture électrique";
        } else {
            $txt .= "la voiture " . $this->modele . " n'est pas  une voiture électrique";
        }
        if (!empty($this->types)) {
            $txt .= "la voiture est de types : " . $this->types . "<br/>";
        }
        $txt .= "le prix HT est de " . $this->prix . " $ <br/>";
        $txt .= "le prix TTC est de " . ($this->prix + ($this->prix * self::TVA)) . " $ <br/>";
        $txt .= " <br/> *********************************************** <br/>";
        return $txt;
    }
}
$v1 = new Voiture("Toyota", "Ryas", "noir", Voiture::NORMAL, true, 10000);
$v2 = new Voiture("Toyota", "Risau", "rouge", Voiture::MINI, false, 15000);
$v3 = new Voiture("Troen", "Picasso", "rouge", Voiture::NORMAL, true, 20000);

// for ($i = 0; $i < count(Voiture::$voitures); $i++) {
//     echo Voiture::$voitures[$i];
// }

// $v3->afficherVoitureMarque("Toyota");

$parcMGA = new ParcAuto("parcMGA", "15 rue bidon");
$parcMGA->ajouterVoiture($v1);
$parcMGA->ajouterVoiture($v2);
$parcMGA->ajouterVoiture($v3);

$parcMGA->afficherVoitureMarque("Toyota");
