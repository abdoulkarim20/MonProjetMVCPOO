<?php
require_once "./model/Region.php";
require_once "DataBaseHelper.php";
class RegionController
{
    private $dbc;
    public function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    //La methode qui va me permettre de faire ajout
    public function add(Region $region)
    {
        $sql = $this->dbc->prepare("INSERT INTO regions (nomRegion) VALUES(?)");
        $sql->bindParam(1, $nomRegion);
        $sql->execute();
        if ($sql) {
            echo "<script>
            alert('ajout avec success')
            document.location.href='../?route=Employer&module=add'
            </script>";
        } else {
            echo "ajout non reussie";
        }
    }
    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT * FROM regions ORDER BY idRegion DESC");
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }
    public function deleteRegion()
    {
        try {
            $sql = $this->dbc->prepare("DELETE FROM regions WHERE idRegion=4");
            $sql->execute();
            header("Location:../?route=Region&module=list");
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
}
