<?php

class Kendaraan 
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga;
    var $merek;
    var $tahunPembuatan;


    function statusHarga()
    {
        if ($this->harga > 50000000) 
            $status = 'Mahal';
        else 
            $status = 'Murah';
        return $status;
    }
    function statusBBM()
    {
        if ($this->bahanBakar == "Premium") {
            return "BBM Subsidi";
        } else {
            return "BBM Non-Subsidi";
        }
    }
     function hargaBekas()
    {
        $hargaBekas = $this->harga * 0.9;
        return $hargaBekas;
    }
}
$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";
$objekKendaraan1->harga = 10000000;
$objekKendaraan1->bahanBakar = "BBM Bersubsidi";
$objekKendaraan1->tahunPembuatan = 2015;
$objekKendaraan1->jumlahRoda = 2;
$objekKendaraan1->warna = "merah";

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga = 20000000;
$objekKendaraan2->bahanBakar = "BBM Non Subsidi";
$objekKendaraan2->tahunPembuatan = 2015;
$objekKendaraan2->jumlahRoda = 4;
$objekKendaraan2->warna = "putih";      

// Output Kendaraan 1

echo "Merek: " . $objekKendaraan1->merek . "<br>";
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan1->statusBBM() . "<br>";
echo "Harga Bekas: " . $objekKendaraan1->hargaBekas() . "<br>";
echo "Jumlah Roda: " . $objekKendaraan1->jumlahRoda . "<br>";
echo "Warna:" . $objekKendaraan1->warna . "<br>";

// Output Kendaraan 2

echo "Merek: " . $objekKendaraan2->merek . "<br>";
echo "Status Harga: " . $objekKendaraan2->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan2->statusBBM() . "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaBekas() . "<br>";
echo "Jumlah Roda: " . $objekKendaraan2->jumlahRoda . "<br>";
echo "Warna:" . $objekKendaraan2->warna . "<br>" ;



?>