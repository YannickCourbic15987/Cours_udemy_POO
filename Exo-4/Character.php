<?php
class Character
{
    public function __construct(
        private string $nom,
        private string $classe,
        private int $attaque,
        private int $pv,
        private bool $forceDuBien
    ) {
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $name): void
    {
        $this->nom = $name;
    }
    public function getClasse(): string
    {
        return $this->classe;
    }
    public function setClasse(string $classe): void
    {
        $this->classe = $classe;
    }
    public function getAttaque(): int
    {
        return $this->attaque;
    }
    public function setAttaque(int $attaque): void
    {
        $this->attaque = $attaque;
    }
    public function getPv(): int
    {
        return $this->pv;
    }
    public function setPv(int $pv): void
    {
        $this->pv = $pv;
    }
    public function getForceDuBien(): bool
    {
        return $this->forceDuBien;
    }
    public function setForceDuBien(bool $forceDuBien): void
    {
        $this->forceDuBien = $forceDuBien;
    }

    private function calculDegat()
    {
        return ($this->pv) / 100 * $this->attaque + 1;
    }

    public function afficherDegat()
    {
        echo "Dégâts infligés : " . $this->calculDegat()  . " dégats <br/>";
    }

    public function __toString()
    {
        $txt = "";
        $txt .= "Mon nom est : " . $this->nom . "<br/>";
        $txt .= "Ma classe est " . $this->classe . "<br/>";
        $txt .= "j' ai une attaque de " . $this->attaque . "<br/>";
        $txt .= "J'inflige : " . $this->calculDegat() . " Dégats <br/>";
        $txt .= "J'ai " . $this->pv . "pv" . "<br/>";
        $txt .= ($this->forceDuBien) ? ("je fais partie des forces du bien ") : ("Je fais partie des forces du mal ") . "<br/>";

        return $txt;
    }
}

$milo = new Character("Milo", "guerrier", 10, 100, true);
$tya = new Character("Tya", "archère", 5, 50, true);
$Lilie = new Character("Lili", "magicienne ", 9, 45, false);
$gael = new Character("gael", "voleur", 2, 10, false);

// $milo->afficherDegat();
// $tya->afficherDegat();
// $Lilie->afficherDegat();
// $gael->afficherDegat();
echo $milo;
echo "<br/>===========================================<br/>";
echo $tya;
echo "<br/>===========================================<br/>";
echo $Lilie;
echo "<br/>===========================================<br/>";
echo $gael;
