<?php
class Persona{
    public $nombre;
    public $telefono;

    public function __construct($nomb, $tel)
    {
        $this->nombre= $nomb;
        $this->telefono=$tel;
    }
    public function obtener_datos(){
        return "Nombre: ". $this->nombre. " Telefono: ".$this->telefono;
    }
}
class Alumno extends Persona{
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno)
    {
       parent::__construct($nomb, $tel);
       $this->grado=$grado;
       $this->turno=$turno;
    }
    public function obtener_datos(){
        return parent::obtener_datos(). "Grado: ". $this->grado. " Turno: ".$this->turno;
    }
}
?>
<h3>Crear un array de la clase alumno</h3>
<?php 
 $alumno1= new Alumno("Camila" , "0987654321" , "Tercero - Nivel Medio", "Tarde");
 ?>
 <h3>Imprimir sus datos con foreach</h3>
 <?php
  echo $alumno1->obtener_datos();
  ?>