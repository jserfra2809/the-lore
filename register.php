<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheLore</title>
    <link rel="icon" type="image/png" href=""> <!-- IMAGEN NECESARIA -->
    <meta name="copyright" content="Copyright 2024">
    <meta name="description" content="Registrate en nuestra web.">
    <meta name="keywords" content="juegos, lore, historia">
    <link rel="stylesheet" href="/themes/css/main-phppages.css">
</head>
<body>
    <div class="form">
        <section class="logo-section">
            <div class="container">
                <div class="logo-container">
                    <a href="">
                        <img class="logo" src="" alt="">
                    </a>
                </div>
            </div>
        </section>
        <header>
            <h1 class="header-text">Registrate en TheLore</h1>
        </header>
        <div class="container">
            <main>
                <article>
                    <form action="/login">
                        <div class="form-content">
                            <div>
                                <label for="" class="form-label">Usuario</label>
                                <div class="grow">
                                    <input autocomplete="off" class="form-input-text" id="user" maxlength="25" name="User" type="text" required>
                                </div>
                            </div>
                            <div>
                                <label for="" class="form-label">Contraseña</label>
                                <div class="grow">
                                    <div class="form-passwd">
                                        <div class="form-passwd-icon">
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path></svg>
                                        </div>
                                        <input autocomplete="off" class="form-input-passwd" id="passwd" maxlength="15" name="password" type="password" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="grow">
                                    <div>
                                        <label for="" class="form-label">
                                            <input class="remember-me-checkbox" id="remember-me" type="checkbox" name="remember" value="1">
                                            <span>Recuerdame</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-sing-button">
                                
                            </div>
                        </div>
                    </form>
                </article>
            </main>
        </div>
    </div>
</body>
</html>