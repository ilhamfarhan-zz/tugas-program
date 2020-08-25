<?php
class produk{
    public $namabarang = "laptop",$merk = "lenovo",$harga = 7000000;
    public function getcetak(){
        return "$this->namabarang, $this->merk, $this->harga ";
    }
}
$produk2 = new produk();
$produk2->namabarang="mouse";
$produk2->propertybaru="biru";
echo "nama barang : ",$produk2->getcetak();
echo "<br>";

$produk3 = new produk();
$produk3->namabarang="flasdisk";
$produk3->merk="sandisk";
$produk3->harga=100000;
echo "nama barang : ",$produk3->getcetak();