

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaproszenie</title>
    <style>
        body {
            background-color: purple;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            border: none;
            cursor: pointer;
        }
        .green {
            background-color: green;
            color: white;
        }
        .red {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Czy chciałaby Pani udać się ze mną na studniówkę dnia 13 luty 2025?</h1>
    <form method="POST" action="save.php">
        <button type="submit" name="response" value="zgadzam_sie" class="green">Zgadzam się</button>
    </form>
    <form method="POST" action="save.php">
        <button type="submit" name="response" value="nie_zgadzam_sie" class="red">Nie zgadzam się</button>
    </form>
    <img src="zdjecie2.jpg" alt="Zdjęcie" style="margin-top: 20px; width: 300px; height: auto;">
</body>
</html>

