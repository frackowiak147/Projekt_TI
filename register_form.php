<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 
    <?php
    include_once('nav_man.html');
    ?>
    <form action="" method="post">
        <div class="form_main_container">
            <div class="form_block solid_border">
                <div class="form_line"><b>REJESTRACJA</b></div>
                <div class="form_line">
                    imię
                    <input type="text">
                </div>
                <div class="form_line">
                    nazwisko
                    <input type="text">
                </div>
                <div class="form_line">
                    email
                    <input type="text">
                </div>
                <div class="form_line">
                    hasło
                    <input type="password">
                </div>
                <div class="form_line">
                    powtórz hasło
                    <input type="password">
                </div>
                <div class="form_line"><a href="">Masz już konto? Kliknij tu, by się zalogować.</a></div>
                <div class="form_line error">Błąd</div>
                <div class="form_line"><button type="submit">potwierdź</button></div>
            </div>
        </div>
    </form>

</body>
</html>
