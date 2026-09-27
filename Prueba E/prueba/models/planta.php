<?php

class Planta
{
    protected string $Nombre;
    protected float $AlturaTallo;
    protected bool $TieneHojas;
    protected string $ClimaIdeal;

    public function __construct(
        string $Nombre,
        float $AlturaTallo,
        bool $TieneHojas,
        string $ClimaIdeal
    ) {
        $this->Nombre = $Nombre;
        $this->AlturaTallo = $AlturaTallo;
        $this->TieneHojas = $TieneHojas;
        $this->ClimaIdeal = $ClimaIdeal;
    }

    public function MostrarInformacion()
    {
        echo "Nombre: " . $this->Nombre . "<br>";
        echo "Altura del tallo: " . $this->AlturaTallo . " metros<br>";
        echo "Tiene hojas: " . ($this->TieneHojas ? "Sí" : "No") . "<br>";
        echo "Clima ideal: " . $this->ClimaIdeal . "<br>";
    }
}
