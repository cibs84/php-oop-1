<!-- Creare un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

$movies = [
    [
        'name' => 'La Città Incantata',
        'year' => 2001,
        'director' => "Hayao Miyazaki",
        'poster' => 'https://www.themoviedb.org/t/p/w1280/3PV6lq9BNmoyyDXr5tdNeeESEMn.jpg',
        'description' => 'La piccola Chihiro non sopporta l\'idea di traslocare e di perdere i propri amici, ma non può far niente per impedirlo. Proprio quando la famiglia è in viaggio verso la nuova casa, il padre imbocca una strada sterrata che termina davanti a un tunnel misterioso. I genitori sceglieranno di attraversarlo nonostante le rimostranze di Chihiro, per giungere a un parco dei divertimenti abbandonato, almeno apparentemente.'
    ],
    [
        'name' => 'Pulp Fiction',
        'year' => 1994,
        'director' => "Quentin Tarantino",
        'poster' => 'https://www.themoviedb.org/t/p/w1280/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg',
        'description' => 'Le vite di due gangster, di un pugile e della moglie di un potente boss della malavita finiscono per intrecciarsi in una paradossale storia di violenza, vendetta e redenzione.'
    ],
    [
        'name' => 'Il Padrino',
        'year' => 1972,
        'director' => "Francis Ford Coppola",
        'poster' => 'https://www.themoviedb.org/t/p/w1280/r4gnMXoY1efvaolNDjn3nj4046S.jpg',
        'description' => 'Anni Quaranta. Come è consuetudine, durante il rinfresco per festeggiare le nozze della figlia Conny con Carlo, il "padrino" don Vito Corleone promette assistenza e protezione a familiari e amici. Invia il figliastro Tom Hagen in California per convincere in ogni modo il produttore Jack Woltz a scritturare il cantante Johnny nel suo prossimo film. Woltz non acconsente. Tom allora lo costringe ad accettare con un "avvertimento": l\'uccisione del suo cavallo di razza preferito. Sollozzo, a nome della potente "famiglia" Tartaglia, chiede a Corleone finanziamenti e appoggi per il traffico di droga. Il rifiuto scatena una lotta cruenta tra le due cosche: lo stesso don Vito viene ferito gravemente; il figlio minore Michael lo salva da un secondo attentato. Michael, poi, scavalcando l\'irruento fratello Sonny e Tom, temporeggiatore, organizza un incontro con Sollozzo e con il corrotto capitano di polizia McCluskey uccidendoli entrambi.'
    ]
];


class Movie {
    public $name;
    public $year;
    public $director;
    public $poster = "https://d994l96tlvogv.cloudfront.net/uploads/film/poster/poster-image-coming-soon-placeholder-no-logo-500-x-740_26588.png";
    public $description;

    public function __construct($_name, $_year, $_director){
        $this->name = $_name;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function setDescription($_description){
        return $this->description = $_description;
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<main>
    <div class="container">
        <!-- Column -->
        <div class="col">
            <div class="card">
                <img src="<?php echo $movies[0]['poster'] ?>" alt="">
                <div class="meta-data">
                    <h2 class="title"><?php echo $movies[0]['name'] ?></h2>
                    <span class="year">(<?php echo $movies[0]['year'] ?>)</span>
                    <h3 class="director">Director: <?php echo $movies[0]['director'] ?></h3>
                    <p class="description"><span>Description:</span> <?php echo $movies[0]['description'] ?></p>
                </div>
            </div>
        </div>
        
        <!-- Column -->
        <div class="col">
            <div class="card">
                <img src="<?php echo $movies[1]['poster'] ?>" alt="">
                <div class="meta-data">
                    <h2 class="title"><?php echo $movies[1]['name'] ?></h2>
                    <span class="year">(<?php echo $movies[1]['year'] ?>)</span>
                    <h3 class="director">Director: <?php echo $movies[1]['director'] ?></h3>
                    <p class="description"><span>Description:</span> <?php echo $movies[1]['description'] ?></p>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col">
            <div class="card">
                <img src="<?php echo $movies[2]['poster'] ?>" alt="">
                <div class="meta-data">
                    <h2 class="title"><?php echo $movies[2]['name'] ?></h2>
                    <span class="year">(<?php echo $movies[2]['year'] ?>)</span>
                    <h3 class="director">Director: <?php echo $movies[2]['director'] ?></h3>
                    <p class="description"><span>Description:</span> <?php echo $movies[2]['description'] ?></p>
                </div>
            </div>
        </div>

    </div>
</main>

</body>
</html>