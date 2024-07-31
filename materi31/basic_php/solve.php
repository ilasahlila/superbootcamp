<!-- Soal 1 Struktur Kondisional
Buatlah program PHP yang mengecek apakah sebuah bilangan positif, negatif, atau nol.
Jawaban: -->
<?php
    echo "<br>----------Jawaban dari Soal 1----------<br>";

    echo "<br>";

    function checkNumber($number) {
        if ($number > 0) {
            echo "$number adalah bilangan positif. <br>";
        } elseif ($number < 0) {
            echo "$number adalah bilangan negatif. <br>";
        } else {
            echo "$number adalah nol. <br>";
        }
    }

    checkNumber(10);
    checkNumber(-5);
    checkNumber(0);

    echo "<br><hr>";
?>



<!-- Soal 2 Looping
Buatlah program PHP yang menampilkan angka 1 sampai 10.
Jawaban: -->
<?php
    echo "<br>----------Jawaban dari Soal 2----------<br>";

    echo "<br>";
    
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }
    
    echo "<br><hr>";
?>



<!-- Soal 3 Function
Buatlah fungsi PHP yang menerima dua parameter dan mengembalikan hasil penjumlahannya.
Jawaban: -->
<?php
    echo "<br>----------Jawaban dari Soal 3----------<br>";

    echo "<br>";

    function add($a, $b) {
        return $a + $b;
    }

    echo add(3, 5); // Output: 8

    echo "<br>";

    echo "<br><hr>";
?>



<!-- Soal 4 Array
Buatlah array PHP yang berisi nama-nama hari dalam seminggu, lalu tampilkan hari Rabu.
Jawaban: -->
<?php
    echo "<br>----------Jawaban dari Soal 4----------<br>";

    echo "<br>Minggu | Senin | Selasa | Rabu | Kamis | Jumat | Sabtu<br>";

    echo "Menampilkan Hari Ke-3: <br>";

    $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

    echo "<br>";

    echo $hari[3]; // Output: Rabu

    echo "<br>";

    echo "<br><hr>";
?>



<!-- Soal 5 Array Asosiatif
Buatlah array asosiatif yang berisi data diri (nama, umur, alamat) dan tampilkan datanya.
Jawaban: -->
<?php
    echo "<br>----------Jawaban dari Soal 5----------<br>";

    echo "<br>";

    $data_diri = [
        "nama" => "ILA",
        "umur" => 10,
        "alamat" => "Jl. Yang Jauh Jangan Lupa Pulang"
    ];

    // Tampilkan data diri
    echo "Nama: " . $data_diri["nama"] . "<br>";
    echo "Umur: " . $data_diri["umur"] . "<br>";
    echo "Alamat: " . $data_diri["alamat"] . "<br>";

    echo "<br>";
?>
