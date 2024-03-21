<?php
class Conexion {
    public $user = "root";
    public $contrasena = "wWQ/3asd1NDL0fnO";
    public $host = "localhost";
    public $db = "atencion_medica";
    public $conexion;
   
    function __construct(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->contrasena, $this->db);

        if(!$this->conexion) {
            die("Conexion fallida: " . mysqli_connect_error());

        }
        echo "Conexion exitosa";
        
    }
    public function establecerConexion() {
        return $this->conexion;
    } 
    function __destruct(){
        mysqli_close($this->conexion);
    }


}
?>







?>