<!-- 
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
 -->

<?php 
$matches = [
    [
        'home' => 'Olimpia Milano',
        'away' => 'Cantù',
        'homePoints' => 55,
        'awayPoints' => 60,
    ],
    [
        'home' => 'Virtus Bologna',
        'away' => 'Pesaro',
        'homePoints' => 70,
        'awayPoints' => 63,
    ],
    [
        'home' => 'Virtus Roma',
        'away' => 'Trieste',
        'homePoints' => 55,
        'awayPoints' => 73,
    ],
    [
        'home' => 'Fortitudo Bologna',
        'away' => 'Reyer Venezia',
        'homePoints' => 40,
        'awayPoints' => 50,
    ],
];

// var_dump($matches);

?>

<?php for ($i = 0; $i < count($matches); $i++) { ?>
    <div>Partita <?php echo $i+1 ?> : <?php echo $matches[$i]['home'] ?> - <?php echo $matches[$i]['away'] ?> || <?php echo $matches[$i]['homePoints'] ?>-<?php echo $matches[$i]['awayPoints'] ?></div>
<?php } ?>

<hr>

<!-- 
PHP Snack 2:
Passare come parametri GET (query string) name, mail e age
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri
2. che mail contenga un punto e una chiocciola
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

 -->


<?php 
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (strlen($name) < 3) {
    echo 'ACCESSO NEGATO: il nome deve contenere almeno 3 caratteri';
}
elseif ( strpos($mail, '@') === false || strpos($mail, '.') === false ) {
    echo 'ACCESSO NEGATO: la mail deve contenere la @ e il . al suo interno';
}
elseif (!is_numeric($age)) {
    echo 'ACCESSO NEGATO: l\'età deve essere un valore numerico';
}
else {
    echo 'ACCESSO CONSENTITO';
}

?>