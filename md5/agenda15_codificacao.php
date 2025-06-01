<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda 15 codificação</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="content">

    <div class="w3-container w3-center">
        <div class="w3-card-4 w3-round-large w3-black w3-text-green" style="width: 40%; margin: auto; margin-top: 220px; padding: 32px;">
            <h2 class="w3-text-white w3-orange w3-round-large w3-padding">CRIPTOGRAFIA</h2>

            <form action="codifica.php" method="post">

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:8%;">
                        <i class="w3-xxlarge fa fa-lock"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtTexto" placeholder="Insira Texto">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <button name="btnCrip"
                        class="w3-button w3-orange w3-round-large"
                        style="width: 50%;">
                        Criptografar
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>