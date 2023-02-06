<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>


<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <?php include './common/nav.php';
        if (!isset($page)) {
            $page = "home";
        }
        switch ($page) {
            case 'home':
                include './common/home.php';
                break;
            case 'cv':
                include './common/cv.php';
                break;
            case 'realisations':
                include './common/realisations.php';
                break;
            case 'veilles':
                include './common/veilles.php';
                break;
            case 'badminton':
                include './common/badminton.php';
                break;
            case 'paradis':
                include './common/paradis.php';
                break;
            case 'boot':
                include './common/boot.php';
                break;
            case 'git':
                include './common/git.php';
                break;
            case 'laravel':
                include './common/laravel.php';
                break;

            default:
                include './common/home.php';
                break;
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </main>

    <footer>
        <div class="container">
            <p class="text-center">Dmitrii Galaev <br> 2023</p>
        </div>
    </footer>
</body>




</html>