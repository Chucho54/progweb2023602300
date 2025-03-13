 <?php
 class persona {
    private $nombre;
    private $FecNac;
    private $EdadAct;
    private $Tel;

    public function __construct($nombre,$FecNac,$EdadAct,$Tel)
    {
        $this ->nombre = $nombre;
        $this ->FecNac = $FecNac;
        $this ->EdadAct = $EdadAct;
        $this ->Tel = $Tel;
        
    }
    public function getnombre() {
        return $this->nombre;
    }
    public function setnombre($value) {
        $this->nombre = $value;
    }
    public function getFecNac() {
        return $this->FecNac;
 }
 public function setFecNac($value) {
    $this->FecNac = $value;
}
public function getEdadAct(){
    $fechaNac = new DateTime($this->FecNac);
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNac);
        return $edad->y;
}
public function setEdadAct($value){
    $this->EdadAct = $value;
}
public function getTel() {
    return $this->Tel;
}
public function setTel($value) {
    $this->Tel = $value;
}
}
 //El cierre de php no se incluye porque el script debe ser incluido en otro