<?php

class Arbusto extends Planta
{
    private float $AnchoArbusto;
    private bool $EsDomestico;
    private string $VariedadArbusto;
    private string $ColorHojas;
    private bool $SePoda;

    public function __construct(string $Nombre,float $AlturaTallo,bool $TieneHojas,string $ClimaIdeal,float $AnchoArbusto,bool $EsDomestico,string $VariedadArbusto,string $ColorHojas,bool $SePoda
    ) {
        parent::__construct($Nombre,$AlturaTallo,$TieneHojas,$ClimaIdeal);

        $this->AnchoArbusto = $AnchoArbusto;
        $this->EsDomestico = $EsDomestico;
        $this->VariedadArbusto = $VariedadArbusto;
        $this->ColorHojas = $ColorHojas;
        $this->SePoda = $SePoda;
    }

    public function Saludar()
    {
        echo "Hola, soy un arbusto<br>";
    }

    public function MostrarInformacion()
    {
        parent::MostrarInformacion();

        echo "Ancho del arbusto: " . $this->AnchoArbusto . " metros<br>";
        echo "Es doméstico: " . ($this->EsDomestico ? "Sí" : "No") . "<br>";
        echo "Variedad de arbusto: " . $this->VariedadArbusto . "<br>";
        echo "Color de hojas: " . $this->ColorHojas . "<br>";
        echo "¿Se poda?: " . ($this->SePoda ? "Sí" : "No") . "<br>";
    }
}

$Arbusto = new Arbusto(
    "arbusto",1,true,"mojado",2,true,"arbusto verde","Verde",true
);