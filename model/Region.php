<?php
class Region
{
    private $idRegion;
    private $nomRegion;

    //Definissions les getter et setter des attribut de la class Region
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
    }
    public function getIdRegion()
    {
        return "Voici toutes les regions de senegal" . $this->idRegion;
    }
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;
    }
    public function getNomRegion()
    {
        return $this->nomRegion;
    }
}
