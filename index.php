<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Learning PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        .card {
            background: #1e293b;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        a {
            color: #38bdf8;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            line-height: 1.8;
        }
    </style>
</head>
<body>

<h1>🚀 Learning PHP</h1>

<div class="container">

    <div class="card">
        <h2>📘 Dasar PHP</h2>
        <ul>
            <li><a href="dasar/variabel.php">Variabel</a></li>
            <li><a href="dasar/tipe_data.php">Tipe Data</a></li>
            <li><a href="dasar/operator.php">Operator</a></li>
            <li><a href="dasar/percabangan.php">Percabangan</a></li>
            <li><a href="dasar/perulangan.php">Perulangan</a></li>
        </ul>
    </div>

    <div class="card">
        <h2>⚙️ Function</h2>
        <ul>
            <li><a href="function/function_dasar.php">Function Dasar</a></li>
            <li><a href="function/function_parameter.php">Function Parameter</a></li>
        </ul>
    </div>

    <div class="card">
        <h2>📨 Form</h2>
        <ul>
            <li><a href="form/form_get.php">Form GET</a></li>
            <li><a href="form/form_post.php">Form POST</a></li>
        </ul>
    </div>

    <div class="card">
        <h2>🗄️ Database (CRUD)</h2>
        <ul>
            <li><a href="database/koneksi.php">Koneksi</a></li>
            <li><a href="database/insert.php">Insert</a></li>
            <li><a href="database/select.php">Select</a></li>
            <li><a href="database/update.php">Update</a></li>
            <li><a href="database/delete.php">Delete</a></li>
        </ul>
    </div>

    <div class="card">
        <h2>🧠 Latihan</h2>
        <ul>
            <li><a href="latihan/latihan1.php">Latihan 1</a></li>
            <li><a href="latihan/latihan2.php">Latihan 2</a></li>
        </ul>
    </div>

</div>

</body>
</html>