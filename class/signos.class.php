<?php
class SignosZodiacales{

    protected $fecha;
    protected $signosKey;
    protected $signozodiacal;
    protected $signosArray;

    public function __construct($fecha = null, $signosArray = null)
    {
        if (!$fecha instanceof \DateTime) {
            $fecha = new \DateTime($fecha);
        }
        $this->fecha = $fecha;
        $this->signosArray = $signosArray;
        
        $this->signosKey = $this->findSignoZodiacal();
        if (null !== $this->signosKey) {
            $this->signozodiacal = $this->signosArray[$this->signosKey]['nombre'];
        }
    }

    public function getSignoZodiacal()
    {
        return $this->signozodiacal;
    }

    public function getSimbolo()
    {
        return $this->signosArray[$this->signosKey]['simbolo'];
    }

    public function getSignoTexto()
    {
        return $this->signosArray[$this->signosKey]['texto'];
    }

    protected function findSignoZodiacal()
    {
        $fecha = $this->fecha->getTimestamp();
        $anio = $this->fecha->format('Y');
        foreach ($this->signosArray as $signo) {
            if ($fecha >= strtotime($anio . '-' . $signo['inicio']) && $fecha <= strtotime($anio . '-' . $signo['fin'] . ' 23:59:59')) {
                return $signo['key'];
            }
        }

        return;
    }

}