<?php

//Self Sinifi icersinde cagirma methot çağırma
//parent kalitim ile olusturulan referans alan sinif methot çağırama

class Varlik
{
    public $boy;
    public $kilo;
    public $yas;
    public $isim = "Kopekler";

    public function __construct()  //Database baglantisi oldugunda direk baglanti olur
    {
        echo "Selam <br>" . $this->isim;
    }

    public function kosmak()
    {
        echo "Insan Koşar<br>";
    }

    public function yurumek()
    {
        self::yurumek();
        echo "Insan yürür<br>";
    }

    public function uyumak()
    {
        echo "Insan uyur<br>";
    }

    public function __destruct() //Sinif bittiginde calisir
    {
//      echo "Bye";
    }
}

class Hayvanlar extends Varlik
{
    public function yemekyeme()
    {
        parent::kosmak();
//        echo "Yemek yer";
        echo $this->isim . "Yemek yer ";
    }
}

$varlik = new Hayvanlar();
$varlik->yemekyeme();
$varlik->uyumak();
$varlik->kosmak();

