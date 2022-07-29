<?php

class Livre
{
    public function __construct(
        public string $titre,
        public int $nbPages,
        private string $couleurCouverture,
        private bool $estTraduitAnglais

    ) {
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre($titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of nbPages
     */
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set the value of nbPages
     */
    public function setNbPages($nbPages): self
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get the value of couleurCouverture
     */
    public function getCouleurCouverture()
    {
        return $this->couleurCouverture;
    }

    /**
     * Set the value of couleurCouverture
     */
    public function setCouleurCouverture($couleurCouverture): self
    {
        $this->couleurCouverture = $couleurCouverture;

        return $this;
    }

    /**
     * Get the value of estTraduitAnglais
     */
    public function getEstTraduitAnglais()
    {
        return $this->estTraduitAnglais;
    }

    /**
     * Set the value of estTraduitAnglais
     */
    public function setEstTraduitAnglais($estTraduitAnglais): self
    {
        $this->estTraduitAnglais = $estTraduitAnglais;

        return $this;
    }

    public function changeCouleur($couleur)
    {
        $this->couleurCouverture = $couleur;
    }
    private function traductionAnglaise()
    {
        $this->estTraduitAnglais = true;
    }

    public function afficherLivre()
    {
        echo $this->titre . "<br/> " . $this->nbPages . "<br/>" . $this->couleurCouverture . "<br/> " . $this->estTraduitAnglais;
    }

    public function ajoutePages($nbAAjouter)
    {
        $this->nbPages += $nbAAjouter;
    }

    public function basculerEnAnglais()
    {
        $this->traductionAnglaise();
        $this->ajoutePages(5);
        $this->changeCouleur("verte");
    }

    public function traduitEnAnglais()
    {
        if ($this->estTraduitAnglais === true) {
            echo $this->titre . " est traduit en anglais";
        } else {
            echo $this->titre . " n'est pas traduit en anglais";
        }
    }
}

$livre1 = new Livre("l'algo selon H2PROG", 500, "noir", false);
$livre1->afficherLivre();
$livre1->setTitre("algo H2PROG");
$livre1->setNbPages(10);
$livre1->afficherLivre();
$livre1->ajoutePages(100);
$livre1->changeCouleur("rose");
$livre1->afficherLivre();
$livre1->basculerEnAnglais();
$livre1->afficherLivre();
$livre1->traduitEnAnglais();
