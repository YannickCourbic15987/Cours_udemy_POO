<?php
class Personnage
{

    public function __construct(
        private string $nom,
        private int $age,
        private bool $sexe
    ) {
    }

    public function getName(): string
    {
        return $this->nom;
    }

    public function setName(string $name): void
    {
        $this->nom = $name;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function getSexe(): bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): void
    {
        $this->sexe = $sexe;
    }

    public function ditBonjour()
    {
        echo " Bonjour , c'est moi " . $this->nom;
    }
}
$perso1 = new Personnage("tya", 22, false);
$perso1->ditBonjour();
$perso1->setName("gut");
echo $perso1->ditBonjour();



