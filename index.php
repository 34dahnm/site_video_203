

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACountry</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/7886c5bb69.js" crossorigin="anonymous"></script>
        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="accets/css/style.css">
    </head>
    <body>
    <!-- HEADER -->
    <?php
    include("app/include/header.php");
    ?>
    <!-- HEADER -->
    <!-- MENU START -->
    <div class="menu">
        <div class="container" style = "height: 250px;width: auto;">
            <div class="text-center">
                <a href = "#"><img src="accets/images/1.png" class="rounded" alt="not fiend"></a>
            </div>

        </div>
        <div class="container-fluid">

            <div class = "container main-content">
                <div class="">
                    <div class = "row video-all">
                        <img src="accets/images/2.jpg" alt = "not fiend" class = "col-3 text-center img-video">
                        <div class = "col text-center name-video">три дня дождя — Где ты</div>
                    </div>
                    <video class="video" controls>
                        <source src="accets/video/2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- MENU END -->
    <?php
    include("app/include/footer.php");
    ?>
    </body>
</html>