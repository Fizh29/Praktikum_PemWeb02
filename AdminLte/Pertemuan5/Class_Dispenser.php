<?php
class Dispenser{
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    function __construct($harga, $volgelas, $nama){
        $this->hargasegelas = $harga;
        $this->volumegelas = $volgelas;
        $this->namaminuman = $nama;
    }
    public function isi($vol){
    $this->volume = $vol;
    return $vol;
    }
    public function cetak(){
        echo "Andi Membeli segelas ". $this->namaminuman. " yang berharga ". $this->hargasegelas. " Ribu";
    }
    public function pesan(){
        return $this->volume = $this->volume - $this->volumegelas;
    }
}
$pesanan1 = new Dispenser(2000, 250, "Teh Sisri");
echo "Dispenser teh sisri adalah ". $pesanan1->isi(10000). " Ml";
echo "<br>";
$pesanan1->cetak();
echo "<br>";
echo "Sisa dari dipenser teh sisri adalah ". $pesanan1->pesan()."Ml";




?>