<?php 

 class Modelo{

   private $Modelo;
   private $db;
   public function __construct(){
    $this->Modelo = array();
    $this->db=new PDO('mysql:host=localhost;dbname=bluearchivenew',"root","");
   }

   public function showdataindex($tabla, $condicion){
    $consulta ="SELECT * FROM".$tabla."WHERE".$condicion.";";
    $resultado =$this->db->query($consulta);
    while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){
        $this->personas[]=$filas;
    }
    return $this->personas;
}
}
?>