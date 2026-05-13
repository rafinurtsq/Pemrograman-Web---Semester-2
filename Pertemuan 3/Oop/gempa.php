<?php

class Gempa {
    private $lokasi;
    private $skala;

    public function __construct($lokasi, $skala) {
        $this->lokasi = $lokasi;
        $this->skala = $skala;
    }

    private function dampak($skala) {
        if ($skala >=0 && $skala <=2)
            $dampak = "Tidak terasa";
        elseif ($skala > 2 && $skala <= 4)
            $dampak = "Terasa oleh manusia";
        elseif ($skala > 4 && $skala <= 6)
            $dampak = "Bangunan roboh";
        else
            $dampak = "bangunan roboh dan berpotensi tsunami";

        return $dampak;
    }

    public function cetak() {
        echo "Lokasi: " . $this->lokasi . "<br>";
        echo "Skala: " . $this->skala . "<br>";
        echo "Dampak: " . $this->dampak($this->skala) . "<br><hr>";
    }
}
