<?php

class Flor extends Planta
{
    private string $ColorPetalos;
    private int $CantidadPromedioPetalos;
    private string $ColorPistilo;
    private string $VariedadFlor;
    private string $EstacionFlorece;

    public function __construct(string $Nombre,float $AlturaTallo,bool $TieneHojas,string $ClimaIdeal,string $ColorPetalos,int $CantidadPromedioPetalos,string $ColorPistilo,string $VariedadFlor,string $EstacionFlorece
    ) {
        parent::__construct(
            $Nombre,
            $AlturaTallo,
            $TieneHojas,
            $ClimaIdeal
        );

        $this->ColorPetalos = $ColorPetalos;
        $this->CantidadPromedioPetalos = $CantidadPromedioPetalos;
        $this->ColorPistilo = $ColorPistilo;
        $this->VariedadFlor = $VariedadFlor;
        $this->EstacionFlorece = $EstacionFlorece;
    }

    public function Saludar()
    {
        echo "Hola, soy una flor<br>";
    }

    public function MostrarInformacion()
    {
        parent::MostrarInformacion();

        echo "Color de petalos: " . $this->ColorPetalos . "<br>";
        echo "Cantidad promedio de petalos: " . $this->CantidadPromedioPetalos . "<br>";
        echo "Color del pistilo: " . $this->ColorPistilo . "<br>";
        echo "Variedad de la flor: " . $this->VariedadFlor . "<br>";
        echo "Estación en la que florece: " . $this->EstacionFlorece . "<br>";
    }
}



$Flor = new Flor(
    "Girasol",1,true,"Templado","Amarillo",100,"Amarillo","flor","Primavera"
);