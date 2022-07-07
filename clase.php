<title>php oop -basico 01</title>
<?php
echo '<h1>php oop -basico 01</h1>';
$nombre=$_REQUEST['num1'];
$horas=$_REQUEST['num2'];
$pesos=$_REQUEST['num3'];

class Persona {
    private $nombre, $horas, $pesos;
    public function inicializar($n, $h, $p)
    {
      $this->nombre=$n;
      $this->horas=$h;
      $this->pesos=$p;
    }
    public function imprimir()
    {
        echo 'El nombre de la persona es: ';
        echo $this->nombre;
        echo '<br>';
    }
    public function multiplicar(){
        $mult = $this->horas * $this->pesos;
        echo "Cobra un total de: $mult pesos";
    }
  }
  
$per1=new Persona();
$per1->inicializar($nombre, $horas, $pesos);
$per1->imprimir();
$per1->multiplicar();
?>
