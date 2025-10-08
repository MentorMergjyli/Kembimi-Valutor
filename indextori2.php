<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Këmbimi Valutor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #00b4d8, #0096c7);
            color: #fff;
            text-align: center;
            padding-top: 80px;
        }
        .box {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 60px;
            border-radius: 20px;
            display: inline-block;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }
        input {
            padding: 10px;
            border: none;
            border-radius: 10px;
            margin: 10px;
            font-size: 1em;
            width: 200px;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            background-color: #ffd60a;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #ffcd00;
        }
        .result {
            margin-top: 30px;
            background: rgba(255,255,255,0.2);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Kalkulator Këmbimi Valutor</h2>

    <form method="POST">
        <input type="number" step="0.01" name="euro" placeholder="Shuma në Euro" required><br>
        <input type="number" step="0.01" name="kursi" placeholder="Kursi i këmbimit (Lek/€)" required><br>
        <button type="submit" name="afisho">Afisho</button>
    </form>

    <?php
    if (isset($_POST["afisho"])) {
        $euro = floatval($_POST["euro"]);
        $kursi = floatval($_POST["kursi"]);

        if ($euro > 0 && $kursi > 0) {
            $lek = $euro * $kursi;
            echo "<div class='result'>
                    <h3>Rezultati i Konvertimit</h3>
                    <p>Shuma e dhënë: <strong>" . number_format($euro, 2) . " €</strong></p>
                    <p>Kursi i këmbimit: <strong>" . number_format($kursi, 2) . " Lek/€</strong></p>
                    <p>Shuma në Lekë: <strong>" . number_format($lek, 2) . " Lekë</strong></p>
                  </div>";
        } else {
            echo "<div class='result' style='color:#ffcccb;'><strong>Ju lutem vendosni vlera pozitive!</strong></div>";
        }
    }
    ?>

</div>

</body>
</html>
