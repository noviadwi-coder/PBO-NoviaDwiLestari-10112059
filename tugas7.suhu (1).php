<?php

class KalkulatorSuhu {
    
    // Property
    public $suhu;

    // Constructor
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    // Method Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Method Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }
}

// Contoh penggunaan
$kalkulator = new KalkulatorSuhu(30);

echo "================= KALKULATOR SUHU =================<br>";
echo "Satuan : Celsius (°C)<br>";
echo "----------------------------------------------<br>";
echo "SUHU (C) : " . $kalkulator->suhu . "<br>";
echo "FAHRENHEIT : " . $kalkulator->cToF() . "<br>";
echo "KELVIN : " . $kalkulator->cToK() . "<br>";
echo "==============================================<br>";

?>
