<?php

Class Belanja {
    
public $namaPembeli="novia";
public $namaBarang="sampo";
public $hargaBarang=9000;
public $jumlahBarang=2;
public $totalBayar;
public $diskon=0.1;

public static $pajak =0.2;

public function totalHarga(){
    $subTotal= $this->hargaBarang * $this->jumlahBarang;

    return $subTotal;
}
}
$belanja1= new Belanja();
echo "subTotal: Rp " . $belanja1->totalHarga() . "\n";
?>
