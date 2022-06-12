<! –– header ––>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>APP-ENSAT</title>
        <link rel="stylesheet" type="text/css" href="../Views/css/main.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg  bg-light">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">
                            <img src="../Views/photos/ensat.jpg" alt="" width="150" height="50" class="d-inline-block align-text-top">
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href=" <?= $path = ($_SESSION['role'] == 'admin') ? "index.php?url=Admin/Eleves" : "index.php?url=Users/Eleves"  ?>" class="nav-link"> Acceuil </a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['userid'])) : ?>
                        <li class="nav-item">
                            <a href="index.php?url=Users/Profil" class="nav-link"> Profil </a>
                        </li>
                        <li class="nav-item">
                            <a href='index.php?url=Users/logout' class="nav-link"> Deconnexion </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?url=Users/Login" class="nav-link"> Connexion </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div class="container">
            <?php
            if (isset($contenu)) {
                echo $contenu;
            }
            ?>
        </div>
        <! –– footer––>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>

    </html>