<?php 
$week_days_IT = [
    'Sunday' => 'Domenica',
    'Monday' => 'Lunedì',
    'Tuesday' => 'Martedì',
    'Wednesday' => 'Mercoledì',
    'Thursday' => 'Giovedì',
    'Friday' => 'Venerdì',
    'Saturday' => 'Sabato'
];

$months_IT = [
    'January' => 'Gennaio',
    'February' => 'Febbraio',
    'March' => 'Marzo',
    'April' => 'Aprile',
    'May' => 'Maggio',
    'June' => 'Giugno',
    'July' => 'Luglio',
    'August' => 'Agosto',
    'September' => 'Settembre',
    'October' => 'Ottobre',
    'November' => 'Novembre',
    'December' => 'Dicembre'
];

$todays_date = new DateTime();
$week_day = $week_days_IT[$todays_date->format('l')];
$day = $todays_date->format('d');
$month = $months_IT[$todays_date->format('F')];
$year = $todays_date->format('Y');


$teams = [
    'Inter' => ['Handanovic', 'de Vrij', 'Bastoni', 'Skriniar', 'Perisic', 'Brozovic', 'Barella', 'Calhanoglu', 'Darmian', 'Lautaro Martinez', 'Zapata'],
    'Milan' => ['Maignan', 'Tomori', 'Kjaer', 'Hernandez', 'Calabria', 'Kessie', 'Bennacer', 'Saelemaekers', 'Diaz', 'Leao', 'Ibrahimovic'],
    'Juventus' => ['Szczesny', 'De Ligt', 'Chiellini', 'Danilo', 'Alex Sandro', 'Locatelli', 'Bentancur', 'Chiesa', 'Kulusevski', 'Dybala', 'Morata'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
<?php
echo "Oggi è: $week_day $day $month $year";
?>
</h2> 

<p><?php
foreach ($teams as $team => $formazione) {
    echo "Squadra: $team <br>";
    echo "Formazione: <br>";
    echo "<ul>";
    foreach ($formazione as $giocatore) {
        echo "<li>$giocatore</li>";
    }
    echo "</ul>";
    echo "<br>";
}

?></p>

<ul><?php
        foreach($teams as $team => $formazione) { ?>
        <br>
        <h3><li>Squadra: <?= $team ?> </h3>
        <p>Formazione:</p>
                <ul><?php
                    foreach ($formazione as $player) { ?>
                        <li><?= $player ?></li><?php
                    } ?>
                </ul>
            </li><?php
        } ?>
    </ul>



</body>
</html>



