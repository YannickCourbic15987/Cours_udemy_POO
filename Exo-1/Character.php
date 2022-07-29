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
}

$milo = new Character("Milo", "guerrier", 10, 100, true);
$tya = new Character("Tya", "archère", 5, 50, true);
$Lilie = new Character("Lili", "magicienne ", 9, 45, false);
$gael = new Character("mohammed", "voleur", 2, 10, false);

$milo->afficherDegat();
$tya->afficherDegat();
$Lilie->afficherDegat();
$gael->afficherDegat();
