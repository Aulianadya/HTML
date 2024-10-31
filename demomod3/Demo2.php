<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Website 2024</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .output {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .output p {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            font-size: 16px;
            width: 100px;
            text-align: center;
        }

        .number {
            background-color: #eee;
        }

        .pemrograman {
            background-color: #87ceeb;
            color: #fff;
        }

        .website {
            background-color: #ffa07a;
            color: #fff;
        }

        .both {
            background-color: #8a2be2;
            color: #fff;
        }

        .num2024 {
            background-color: #32cd32;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemrograman Website 2024</h1>
        <div class="output">
            <?php
            function cetakBilangan($n) {
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 4 == 0 && $i % 6 == 0) {
                        echo "<p class='both'>Pemrograman Website 2024</p>";
                    } elseif ($i % 5 == 0) {
                        echo "<p class='num2024'>2024</p>";
                    } elseif ($i % 4 == 0) {
                        echo "<p class='pemrograman'>Pemrograman</p>";
                    } elseif ($i % 6 == 0) {
                        echo "<p class='website'>Website</p>";
                    } else {
                        echo "<p class='number'>$i</p>";
                    }
                }
            }

            // Contoh pemanggilan fungsi
            cetakBilangan(30);
            ?>
        </div>
    </div>
</body>
</html>
