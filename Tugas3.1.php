<?php

class PegadaianSyariah {

    var $pinjaman;
    var $bunga;
    var $lamaAngsuran;
    var $keterlambatan;

    // Menghitung total pinjaman + bunga
    function totalPinjaman() {
        $total = $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
        return $total;
    }

    // Menghitung besar angsuran per bulan
    function angsuranPerBulan() {
        $angsuran = $this->totalPinjaman() / $this->lamaAngsuran;
        return $angsuran;
    }

    // Menghitung denda keterlambatan (0,15% per hari dari angsuran)
    function dendaKeterlambatan() {
        $denda = $this->angsuranPerBulan() * 0.0015 * $this->keterlambatan;
        return $denda;
    }

    // Menghitung total yang harus dibayar jika terlambat
    function totalBayar() {
        $totalBayar = $this->angsuranPerBulan() + $this->dendaKeterlambatan();
        return $totalBayar;
    }
}

// Membuat objek
$objek = new PegadaianSyariah();

$objek->pinjaman = 1000000;
$objek->bunga = 10;
$objek->lamaAngsuran = 5;
$objek->keterlambatan = 40;

// Output
echo "TOKO PEGADAIAN SYARIAH <br>";
echo "Program Penghitung Besaran Angsuran Hutang <br><br>";

echo "Besaran Pinjaman : Rp. " . number_format($objek->pinjaman) . "<br>";
echo "Bunga : " . $objek->bunga . "%<br>";
echo "Total Pinjaman : Rp. " . number_format($objek->totalPinjaman()) . "<br>";
echo "Lama Angsuran : " . $objek->lamaAngsuran . " bulan<br>";
echo "Angsuran per Bulan : Rp. " . number_format($objek->angsuranPerBulan()) . "<br><br>";

echo "Keterlambatan (Hari) : " . $objek->keterlambatan . "<br>";
echo "Denda Keterlambatan : Rp. " . number_format($objek->dendaKeterlambatan()) . "<br>";
echo "Besaran Pembayaran : Rp. " . number_format($objek->totalBayar()) . "<br>";

?>