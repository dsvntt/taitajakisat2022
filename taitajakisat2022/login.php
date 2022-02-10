<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Kirjaudu sisään</title>
</head>
<body>

    <?php include "includes/header.php" ?>

        <main id="login">
            <div id="login-container">
                <div id="login-desktop-img">
                    <img src="img/login-background/jeshoots-com-VdOO4_HFTWM-unsplash - Copy.jpg" alt="Ruosteinen Rauta Oy DT BG">
                </div>

                <div id="login-mobile-img">
                    <img src="img/login-background/jeshoots-com-VdOO4_HFTWM-unsplash.jpg" alt="Ruosteinen Rauta Oy MB BG">
                </div>

                <form action="functions/auth.php" method="post">
                    <div id="login-form">
                        <h1>Kirjaudu sisään</h1>

                        <h2>Käyttäjänimi:</h2>
                        <input type="text" name="login-login" id="login-login" class="input">

                        <h2>Salasana:</h2>
                        <input type="password" name="login-password" id="login-password" class="input">

                        <input type="submit" value="Kirjaudu" name="login-submit" id="login-submit">
                    </div>
                </form>
            </div>
        </div>
            <?php include "includes/footer.php" ?>
    </main>

</body>