<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Test Soal PT. Duta Generasi Mandiri</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Test Soal</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-dark">
                        <h5>ALFREDO GARCIA ELBARTA TARIGAN</h5>
                        <h6>Posisi Product Development</h6>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <p class="text-dark h6">
                    Soal 1
                </p>
                <p>
                    Urutkan array berikut [12,9,30,”A”,”M”,99,82,”J”,”N”,”B”] dengan urutan abjad
                    di depan dan angka di belakang,<br>
                    contoh [“A”, “B”,”J”, “M”, “N”, 9, 12, 30, 82, 99]

                </p>
            </div>
            <div class="col-md-9">
                <input class="form-control form-md" type="text" name="" id="" placeholder='12, 9, 30, "A", "M", 99, 82, "J", "N", "B"' disabled>
            </div>
            <br />
            <div class="col-md-9">
                <label class="form-label">
                    Jawaban<br />
                    A, B, J, M, N, 9, 12, 30, 82, 99,
                    <br />
                    <?php
                    $data = array(12, 9, 30, "A", "M", 99, 82, "J", "N", "B");
                    $ToArray = preg_grep("/ [0-9] /", $data, PREG_GREP_INVERT);
                    echo "Proses <br/>";
                    print_r($ToArray);
                    echo "<br>";
                    $count = count($ToArray);
                    sort($ToArray);
                    echo "<b>Hasil</b> <br>";
                    for ($i = 0; $i < $count; $i++) {
                        echo "<b>" . $ToArray[$i] . ",</b> ";
                    }
                    ?>
                </label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-dark h6">
                    Soal 2
                </p>
                <p>
                    Silakan tulis kode yang mengandung setidaknya satu fungsi/metode utama
                    yang disebut pattern_count yang menerima dua string atau dua array karakter
                    dengan panjang antara 0 dan 100 karakter. Pertama parameter adalah teks
                    dan parameter kedua adalah pattern. Fungsi ini akan mengembalikan angka
                    bagaimana banyak pola ada di dalam teks. Asumsikan parameter input selalu
                    tidak nol. Solusi Anda tidak boleh menggunakan fungsi pembantu yang telah
                    ditentukan sebelumnya seperti substr_count di PHP atau panjang
                    kecocokan regex dalam JavaScript.<br>
                    Contoh:<br>
                <div class="row">
                    <div class="col-md-4">
                        a. Input: “palindrom”, “ind” <br>
                        Output : 1
                    </div>
                    <div class="col-md-4">
                        d. Input: “ababab”, “aba”<br>
                        Output : 2
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        b. Input: “abakadabra”, “ab”<br>
                        Output : 2
                    </div>
                    <div class="col-md-4">
                        e. Input: “aaaaaa”, “aa”<br>
                        Output : 5
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        c. Input: “hello”, “”<br>
                        Output : 0
                    </div>
                    <div class="col-md-4">
                        f. Input: “hell”, “hello”<br>
                        Output : 0
                    </div>
                </div>
                </p>
            </div>
            <br />
            <div class="col-md-9">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="InputText">Input</label>
                        <input type="text" class="form-control" id="TextInput" name="input" placeholder="Input Text">
                    </div>
                    <div class="form-group">
                        <label for="InputCount">Pencarian</label>
                        <input type="text" class="form-control" id="PencarianText" name="text" placeholder="Input huruf yang ingin dihitung">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    echo "Jawaban<br />";
                    $string = $_POST['input'];
                    if (!empty($_POST['text'])) {
                        $s = $_POST['text'];
                        echo "Text Input : <b>" . $string . "</b><br/>";
                        echo "Pola Yang Dicari : <b>" . $s . "</b><br/>";
                        preg_match_all('/' . $s . '/', $string, $hasil);
                        echo "Proses <br>";
                        print_r($hasil);
                        echo "<br>";
                        echo "<b>Hasil <br>";
                        echo count($hasil[0]) . "</b>";
                    } else {
                        echo "Text Input : <b>" . $string . "</b><br/>";
                        echo "Pola Yang Dicari : <b></b><br/>";
                        preg_match_all('//', $string, $hasil);
                        echo "Proses <br>";
                        print_r($hasil);
                        echo "<br>";
                        echo "<b>Hasil <br>";
                        echo "0</b>";
                    }
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-9">
                <p class="text-dark h6">
                    Soal 3
                </p>
                <p>
                    Buat fungsi yang menghitung banyak nya huruf yang user masukan dalam 1x
                    inputan dan urutkan hasil akhir sesuai abjad, Perhatikan huruf kapital, jika
                    terdapat abjad yang sama namun dalam kapital maka pisah huruf tersebut,<br>
                    contoh :<br>
                    a. Input : “Hello World”<br>
                    Output : [“d”:1, “e”:1, “H”:1, “l”: 3, “o”:2, “r”:1, “W”:1]<br>
                    <br>
                    b. Input : “Bismillah”<br>
                    Output: [“a”:1,”B”:1,”h”:1,”i”:2,”l”:2, “m”:1, “s”:1]<br>
                    <br>
                    c. Input: “MasyaAllah”<br>
                    Output: [“A”:1, “a”:3, “h”:1,”l”:2, “M”:1, “s”:1, “y”:1]<br>

                </p>
            </div>
            <br />
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Text">Input</label>
                        <input type="text" class="form-control" id="InputText" name="inputText" placeholder="Input Text">
                    </div>
                    <button type="submit" name="submitText" class="btn btn-primary">Submit</button>
                </form>
                <?php
                if (isset($_POST['submitText'])) {
                    echo "Jawaban<br/>";
                    $Text = $_POST['inputText'];
                    echo "Input : " . $Text . "<br/>";
                    echo ("<h6>Jumlah tiap Karakter?</h6>Proses : ");
                    $a = count_chars($Text, 1);
                    var_dump($a) . "<br/>";
                    echo "<br/><b>Hasil :";
                    echo "&nbsp;[";
                    foreach ($a as $key => $Text) {
                        echo ('"' . chr($key) . '":' . $Text . ', ');
                    }
                    echo "]</b>";
                }
                ?>
            </div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
