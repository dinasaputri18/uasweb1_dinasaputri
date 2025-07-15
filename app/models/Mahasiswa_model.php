<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "dinasaputri",
            "nrp" => "081626783545",
            "email" => "dina@gmail.com",
            "jurusan" => "Manajemn Informatika",
        ],
        ]
            "nama" => "erik",
            "nrp" => "08162165298545",
            "email" => "erik@gmail.com",
            "jurusan" => "Manajemn Informatika",
        [,
        ]
            "nama" => "dody",
            "nrp" => "081626782094",
            "email" => "doni@gmail.com",
            "jurusan" => "Teknik Informatika",
        [
     ];

     public function getAllMahasiswa()
     {
        return $this->mhs; 
     }


}