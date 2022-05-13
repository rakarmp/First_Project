<?php

class mobil
{

    public $pemilik;
    public $harga;
    public $merk;
    public $kecepatan_mesin;

    public function hidupkan_mobil()
    {
        return "Hidupkan Motor";
    }
    public function matikan_mobil()
    {
        return "Matikan Motor";
    }
}

$print = new mobil();

$print->pemilik = "Raka Rmp";
$print->harga = "Rp5.000.000.000";
$print->merk = "Toyota GR Supra 2022";
$print->kecepatan = "2998cc 382hp";

echo $print->pemilik;
echo "<br />";
echo $print->harga;
echo "<br />";
echo $print->merk;
echo "<br />";
echo $print->kecepatan;
echo "<br />";

echo $print->hidupkan_mobil();
echo "<br />";
echo $print->matikan_mobil();

?>
