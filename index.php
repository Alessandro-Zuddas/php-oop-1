<?php 

require_once __DIR__ . '/db.php';

var_dump(fillMovies($movies));
var_dump(fillSeries($series));

?>

<!-- Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies & series. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP OOP</title>
    </head>
    <body>
        
        <div class="container">

            <section class="movies-section">
                <div class="first-title-container">
                    <h1 class="first-title">Movies</h1>
                </div>
                
                <div class="row">

                    <div class="col">
                        <h1 class="obj-title">Titolo</h1>
                        <p class="obj-desc">Desc</p>
                        <small class="obj-leng">Lingua</small>
                        <small class="obj-duration">Durata</small>
                        <p class="obj-category">Categoria</p>
                    </div>

                </div>
            </section>

            <section class="series-section">
                <div class="first-title-container">
                    <h1 class="first-title">Series</h1>
                </div>
                
                <div class="row">

                    <div class="col">
                        <h1 class="obj-title">Titolo</h1>
                        <p class="obj-desc">Desc</p>
                        <small class="obj-leng">Lingua</small>
                        <small class="obj-duration">Durata</small>
                        <p class="obj-category">Categoria</p>
                    </div>

                </div>
            </section>

        </div>

    </body>
</html>