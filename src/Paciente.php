<?php 
namespace Mattias\Dentist2022;
class Paciente{
    private $nombre, $img, $id;
    
    public function __construct($nombre, $img, $id = null){
        $this->nombre = $nombre;
        $this->img = $img;
        $this->id = $id;
    }
    
    public function insertar(Db $db)
     {
         $c = $db->getConexion();
        
         $sql = "INSERT INTO citas(nombre, img) VALUES(:nombre, :img)";
         $sentecia = $c->prepare($sql);
         $sentecia->bindValue(":nombre",$this->nombre);
         $sentecia->bindValue(":img",$this->img);
         echo "jej ", $this->nombre;
         return $sentecia->execute();
     }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}


?>