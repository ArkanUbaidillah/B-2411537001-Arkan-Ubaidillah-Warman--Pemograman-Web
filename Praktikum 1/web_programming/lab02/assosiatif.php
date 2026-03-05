<?php
// Cara 1
$student = array(
    "nama" => "Budi Santoso",
    "nim" => "12345678",
    "jurusan" => "Informatika",
    "ipk" => 3.75
);

// Cara 2 (sintaks pendek)
$student = [
    "nama" => "Budi Santoso",
    "nim" => "12345678",
    "jurusan" => "Informatika",
    "ipk" => 3.75
];

// Mengakses elemen array asosiatif
echo $student["nama"];    // Output: Budi Santoso
echo "<br>";
echo $student["jurusan"]; // Output: Teknik Informatika