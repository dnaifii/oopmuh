<?php


class BarangRumah {
    //properties
    protected $_nama;
    private $_kecepatan;
    public $_merk;

    public function __construct($nama, $kecepatan) {
        $this->_nama = $nama;
        $this->_kecepatan = $kecepatan;
    }

    public function __destruct() {
        echo "Object {$this->_nama} telah dihapus.";
    }
    // methods
    public function setNama($nama) {
        $this->_nama = $nama;
    }

    public function getNama() {
        return $this->_nama;
    }

    public function setkecepatan($kecepatan) {
        $this->_kecepatan = $kecepatan;
    }

    public function getKecepatan() {
        return $this->_kecepatan;
    }
    public function hidupkan() {
        echo "{$this->_nama} dihidupkan dengan kecepatan {$this->_kecepatan}.";
    }

    public function matikan() {
        echo "{$this->_nama} dimatikan.";
    }
    
    public function info() {
        return "Object: {$this->_nama}, Kecepatan: {$this->_kecepatan},";
    }
    
}

class KipasAngin extends BarangRumah {

    public function __construct($nama, $kecepatan) {
        parent::__construct($nama, $kecepatan);
    }
    
}
// instansiasi objek dari masing masing class
$kipas_angin_kamar = new KipasAngin("Kipas Angin Kamar",2);

// set semua properti dari objeknya
$kipas_angin_kamar->setNama("Kipas Angin Kamar Tidur");
$kipas_angin_kamar->setkecepatan("2");
$kipas_angin_kamar->_merk="cosmos";

// panggil method dari objeknya
$kipas_angin_kamar->hidupkan(); // Output: Kipas Angin Kamar Tidur dihidupkan dengan kecepatan 2.
$kipas_angin_kamar->matikan(); // Output: Kipas Angin Kamar Tidur dimatikan.