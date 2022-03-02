<?php
/* Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui: */
//| - è definita una classe ‘Movie’
//|    => all'interno della classe sono dichiarate delle variabili d'istanza
//|    => all'interno della classe è definito un costruttore
//|    => all'interno della classe è definito almeno un metodo
//| - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
class Movies
{

    public $title;
    public $year;
    public $poster;
    public $rating;
    public $stars;

    public function __construct($title, $year, $poster, $rating)
    {
        $this->title = $title;
        $this->year = $year;
        $this->poster = $poster;
        $this->rating = $rating;
        $this->stars = $this->getStars();
    }

    // get rating in star
    public function getStars()
    {
        return $this->rating / 20;
    }
}


$movie1 = new Movies('Intersellar', 2014, 'https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg', 100);

$movie2 = new Movies('The imitation game', 2014, 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/d97b45c259905e0e21bcecd9938fe3b3de7a31ef11ca1a5b7d2e57386d4e1f15._RI_V_TTW_.jpg', 80);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-3 card-container">
                <div class="bg-container d-flex flex-column justify-content-between" style="background-image: url(<?= $movie1->poster ?>)">
                </div>
                <h4 class="text-uppercase text-center"><?= $movie1->title ?></h4>
                <div>
                    <p>Anno di uscita: <?= $movie1->year ?></p>
                    <span>Compatibilità: <?= $movie1->rating ?></span>
                    <div class="bar">
                        <div class="rating-bar text-center" style="width: <?= $movie1->rating ?>%"><?= $movie1->rating ?></div>
                    </div>
                </div>
            </div>
            <div class="col-3 card-container">
                <div class="bg-container d-flex flex-column justify-content-between" style="background-image: url(<?= $movie2->poster ?>);">
                </div>
                <h4 class="text-uppercase text-center"><?= $movie2->title ?></h4>
                <!-- rating bar -->
                <div>
                    <p>Anno di uscita: <?= $movie2->year ?></p>
                    <span class="mb-3">Compatibilità: <?= $movie2->rating ?></span>
                    <div class="bar">
                        <div class="rating-bar text-center" style="width: <?= $movie2->rating ?>%"><?= $movie2->rating ?></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>