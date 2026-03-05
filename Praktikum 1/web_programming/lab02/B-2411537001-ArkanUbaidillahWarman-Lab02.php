<?php
$nama = "Budi Santoso";
$nim = "TI12345";
$prodi = "Teknik Informatika";
$semester = 3;

$matakuliah = [
    ["kode"=>"IF2101","nama"=>"Pemrograman Web","sks"=>3,"tugas"=>85,"uts"=>78,"uas"=>88],
    ["kode"=>"IF2102","nama"=>"Algoritma dan Struktur Data","sks"=>4,"tugas"=>90,"uts"=>85,"uas"=>82],
    ["kode"=>"IF2103","nama"=>"Basis Data","sks"=>3,"tugas"=>78,"uts"=>75,"uas"=>80],
    ["kode"=>"IF2104","nama"=>"Jaringan Komputer","sks"=>3,"tugas"=>88,"uts"=>70,"uas"=>75],
    ["kode"=>"IF2105","nama"=>"Sistem Operasi","sks"=>3,"tugas"=>95,"uts"=>90,"uas"=>92],
    ["kode"=>"IF2106","nama"=>"Matematika Diskrit","sks"=>2,"tugas"=>75,"uts"=>68,"uas"=>70],
];

function hitungNilaiAkhir($t,$u,$ua){
    return ($t*0.2)+($u*0.4)+($ua*0.4);
}

function getGrade($nilai){
    if($nilai >= 85) return "A";
    elseif($nilai >= 80) return "A-";
    elseif($nilai >= 75) return "B+";
    elseif($nilai >= 70) return "B";
    elseif($nilai >= 60) return "C";
    else return "D";
}

$total_sks = array_sum(array_column($matakuliah,'sks'));
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kartu Hasil Studi</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    padding:20px;
    color:#fff;
}

.container{
    max-width:1100px;
    margin:auto;
    background:rgba(0,0,0,0.6);
    padding:30px;
    border-radius:20px;
    backdrop-filter:blur(10px);
    box-shadow:0 0 25px #00ff88;
}

h1{
    text-align:center;
    color:#00ff88;
    text-shadow:0 0 10px #00ff88;
    margin-bottom:25px;
}

/* ===== BAGIAN IDENTITAS ===== */
.info-box{
    background: linear-gradient(to right, #e6e6e6, #f2f2f2);
    padding:20px 30px;
    border-radius:10px;
    margin-bottom:25px;
    color:#000;
}

.info-grid{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
}

.info-left, .info-right{
    width:48%;
}

.info-item{
    margin:8px 0;
    font-size:16px;
}

.info-item strong{
    font-weight:600;
}

/* ===== TABEL ===== */
table{
    width:100%;
    border-collapse:collapse;
    border-radius:15px;
    overflow:hidden;
}

thead{
    background:linear-gradient(90deg,#00ff88,#00cc66);
    color:#000;
    text-transform:uppercase;
}

th, td{
    padding:12px;
    text-align:center;
}

tbody tr:nth-child(even){
    background:rgba(0,255,136,0.05);
}

tbody tr:hover{
    background:rgba(0,255,136,0.2);
    transition:0.3s;
}

/* ===== BADGE GRADE ===== */
.grade{
    font-weight:bold;
    padding:6px 12px;
    border-radius:20px;
    display:inline-block;
}

.A{ background:#00ff88; color:#000; box-shadow:0 0 8px #00ff88; }
.A- { background:#33ff99; color:#000; }
.Bplus{ background:#a3ffcc; color:#000; }
.B{ background:#ccffe6; color:#000; }

.total{
    text-align:right;
    margin-top:20px;
    font-size:18px;
    color:#00ff88;
    text-shadow:0 0 8px #00ff88;
}

/* ===== RESPONSIVE ===== */
@media (max-width:768px){

    .info-left, .info-right{
        width:100%;
    }

    table, thead, tbody, th, td, tr{
        display:block;
    }

    thead{
        display:none;
    }

    tr{
        margin-bottom:15px;
        border:1px solid #00ff88;
        border-radius:15px;
        padding:10px;
    }

    td{
        text-align:left;
        padding:8px;
    }

    td::before{
        content: attr(data-label);
        font-weight:bold;
        color:#00ff88;
        display:block;
        margin-bottom:4px;
    }
}
</style>
</head>

<body>
<div class="container">
    <h1>Kartu Hasil Studi</h1>

    <div class="info-box">
        <div class="info-grid">
            <div class="info-left">
                <div class="info-item"><strong>Nama:</strong> <?= $nama ?></div>
                <div class="info-item"><strong>NIM:</strong> <?= $nim ?></div>
            </div>

            <div class="info-right">
                <div class="info-item"><strong>Program Studi:</strong> <?= $prodi ?></div>
                <div class="info-item"><strong>Semester:</strong> <?= $semester ?></div>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($matakuliah as $mk):
            $nilai = hitungNilaiAkhir($mk['tugas'],$mk['uts'],$mk['uas']);
            $grade = getGrade($nilai);
            $class = str_replace("+","plus",$grade);
        ?>
            <tr>
                <td data-label="Kode"><?= $mk['kode'] ?></td>
                <td data-label="Mata Kuliah"><?= $mk['nama'] ?></td>
                <td data-label="SKS"><?= $mk['sks'] ?></td>
                <td data-label="Tugas"><?= $mk['tugas'] ?></td>
                <td data-label="UTS"><?= $mk['uts'] ?></td>
                <td data-label="UAS"><?= $mk['uas'] ?></td>
                <td data-label="Nilai Akhir"><?= number_format($nilai,2) ?></td>
                <td data-label="Grade">
                    <span class="grade <?= $class ?>"><?= $grade ?></span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="total">
        Total SKS: <?= $total_sks ?>
    </div>

</div>
</body>
</html>