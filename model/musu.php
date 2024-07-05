<!-- -->

<?php
class Musu{
    private $idusu;
    private $nomusu;
    private $contra;
    private $idpef;

    function getIdusu(){
        return $this->idusu;
    }
    function getNomusu(){
        return $this->nomusu;
    }
    function getContra(){
        return  $this->contra;
    }
    function getIdpef(){
        return $this->idpef;
    }
    /*set*/
    function setIdusu($idusu){
        $this->idusu = $idusu;
    } 
    function setNomusu($nomusu){
        $this->nomusu = $nomusu;
    }
    function setContra($contra){
        $this->contra = $contra;
    }
    function setIdpef($idpef){
        $this->idpef = $idpef
    }
    public function bindParamAll($result){
        $idusu = $this->getIdusu();
        $result->bindParam(':idusu', $idusu);
        $nomusu = $this->getNomusu();
        $result->bindParam(':nomusu', $nomusu);
        $contra = $this->getContra();
        $result->bindParam(':contra', $contra);
        $idpef = $this->getIdpef();
        $result->bindParam(':idpef', $idpef);
        return $result;
    }
    $modelo = new Conexion();
      $conexion = $modelo->getConexion();
      if($_SESSION['idper']==2 and !$idusu) $sql .= "  INNER JOIN usuxsuc AS us ON u.idusu=us.idusu INNER JOIN sucursal as s ON us.idsuc=s.idsuc INNER JOIN empresa as e ON s.idemp=e.idemp WHERE u.idper NOT IN(1,2,3) AND e.idusu=:idusu AND us.idsuc=:idsuc";
      elseif($_SESSION['idper']==1 AND !$idusu) $sql .= "  LEFT JOIN usuxsuc AS us ON u.idusu=us.idusu LEFT JOIN sucursal as s ON us.idsuc=s.idsuc LEFT JOIN empresa as e ON s.idemp=e.idemp WHERE us.idsuc=:idsuc";
      elseif($_SESSION['idper']==10 and !$idusu) $sql .= " INNER JOIN usuxsuc AS us ON u.idusu=us.idusu INNER JOIN sucursal as s ON us.idsuc=s.idsuc INNER JOIN empresa as e ON s.idemp=e.idemp  WHERE u.idper NOT IN(1,2,3,10) AND us.idsuc=:idsuc";
      
    
}
