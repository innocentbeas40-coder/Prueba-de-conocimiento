<?php

require 'planta.php';

class arbol extends planta
{
    private string $Variedad;
    private string $TipoTronco;
    private float $RadioTronco;
    private string $Color;
    private string $TipoHojas;

    public function __construct(string $Nombre,float $AlturaTallo,bool $TieneHojas,string $ClimaIdeal,string $Variedad,string $TipoTronco, float $RadioTronco,string $Color,string $TipoHojas
    ) {
        parent::__construct(
            $Nombre,$AlturaTallo,$TieneHojas, $ClimaIdeal
        );

        $this->Variedad = $Variedad;
        $this->TipoTronco = $TipoTronco;
        $this->RadioTronco = $RadioTronco;
        $this->Color = $Color;
        $this->TipoHojas = $TipoHojas;
    }

    public function Saludar()
    {
        echo "Hola, soy un árbol<br>";
    }

    public function MostrarInformacion()
    {
        parent::MostrarInformacion();

        echo "Variedad: " . $this->Variedad . "<br>";
        echo "Tipo de tronco: " . $this->TipoTronco . "<br>";
        echo "Radio del tronco: " . $this->RadioTronco . " metros<br>";
        echo "Color: " . $this->Color . "<br>";
        echo "Tipo de hojas: " . $this->TipoHojas . "<br>";
    }
}

$Arbol = new Arbol(
    "Roble",8,true,"Templado","Roble","grande",1,"Marrón","verdes"
);