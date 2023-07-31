<?php


class BarangBapak {
    //properties
    protected $_nama;
    private $_bensin;
    public $_kecepatan;

    public function __construct($nama, $bensin) {
        $this->_nama = $nama;
        $this->_bensin = $bensin;
    }

    public function __destruct() {
        echo "Object {$this->_nama} telah diparkirin.";
    }
    // methods
    public function setNama($nama) {
        $this->_nama = $nama;
    }

    public function getNama() {
        return $this->_nama;
    }

    public function setkecepatan($kecepatan) {
        $this->_bensin = $kecepatan;
    }

    public function getkecepatan() {
        return $this->_kecepatan;
    }
    public function hidupkan() {
        echo "{$this->_nama} dihidupkan dengan bensin {$this->_kecepatan}.";
    }

    public function matikan() {
        echo "{$this->_nama} dimatikan.";
    }
    
    public function info() {
        return "Object: {$this->_nama}, kecepatan: {$this->_kecepatan},";
    }
    
}

class Motorbebek extends BarangBapak {

    public function __construct($nama, $kecepatan) {
        parent::__construct($nama, $kecepatan);
    }
    
}
// instansiasi objek dari masing masing class
$motor_bebek_bapak = new Motorbebek("motor bebek bapak",20);

// set semua properti dari objeknya
$motor_bebek_bapak->setNama("motor bebek bapak");
$motor_bebek_bapak->setkecepatan("20");
$motor_bebek_bapak->_merk="yamaha";

// panggil method dari objeknya
$motor_bebek_bapak->hidupkan(); // Output: motor bebek bapak dihidupkan dengan kecepatan 20.
$motor_bebek_bapak->matikan(); // Output: motor bebek bapak dimatikan.