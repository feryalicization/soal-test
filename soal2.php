<?php

class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai;

    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = [];
    }

    public function tambahNilai($mapel, $nilai) {
        $nilaiBaru = new Nilai($mapel, $nilai);
        $this->daftarNilai[] = $nilaiBaru;
    }
}

$siswaBaru = new Siswa("123456789", "Fery");

$siswaBaru->tambahNilai("Inggris", 100);

function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$mapelList = ["Inggris", "Indonesia", "Jepang"];

$siswaList = [];
for ($i = 0; $i < 10; $i++) {
    $namaSiswa = generateRandomString(10);
    $siswa = new Siswa("NRP" . ($i + 1), $namaSiswa);
    $mapel = $mapelList[array_rand($mapelList)];
    $nilai = rand(0, 100);
    $siswa->tambahNilai($mapel, $nilai);
    $siswaList[] = $siswa;
}

foreach ($siswaList as $siswa) {
    echo "NRP: " . $siswa->nrp . ", Nama: " . $siswa->nama . "\n";
    echo "Daftar Nilai:\n";
    foreach ($siswa->daftarNilai as $nilai) {
        echo "- Mapel: " . $nilai->mapel . ", Nilai: " . $nilai->nilai . "\n";
    }
    echo "\n";
}

?>
