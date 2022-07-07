<html>
<head>
    <title>tp71</title>
</head>
<body>
<?php

$ancho=$_REQUEST['n1'];
$largo=$_REQUEST['n2'];

class Rectangulo{

    private $ancho;
    private $largo;

    public function inicializar($a, $l){
        $this->ancho=$a;
        $this->largo=$l;
    }

    public function CalcularP()
    {
        $mult=$this->ancho * 2 + $this->largo * 2;
        return $mult;
    }

    public function CalcularA()
    {
        $mult1=$this->ancho * $this->largo;
        return $mult1;
    }
    public function MostrarDatos()
    {
        echo "el ancho es: ".$this->ancho;
        echo '<br>';
        echo "el largo es: ".$this->largo;
        echo '<br>';
        echo "el perimetro es: ".$this->CalcularP();
        echo '<br>';
        echo "el area es: ".$this->CalcularA();
        echo '<br>';
    }
}


$Rectangulo =new Rectangulo();
$Rectangulo->inicializar($ancho, $largo);
$Rectangulo->CalcularP();
$Rectangulo->CalcularA();
$Rectangulo->MostrarDatos();

?>
</body>
</html>
