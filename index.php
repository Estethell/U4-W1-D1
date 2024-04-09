<?php

$squadre = [
    "Atalanta" => [
 "3", "4", "2", "1"
    ],
    "Bologna" => [
      "4", "1", "4", "1"  
    ],
    "Cagliari" => [
       "3", "5", "2" 
    ],
    "Empoli" => [
        "3", "5", "2"
    ],
    "Fiorentina" => [
        "4", "2", "3", "1"
    ],
    "Frosinone" => [
        "4", "3", "3"
    ],
    "Genoa" => [
        "3", "5", "1", "1"
    ],
    "Inter" => [
        "3", "5", "2"
    ],
    "Juventus"=> [
        "3", "5", "2"
    ],
    "Lazio" => [
        "3", "4", "2", "1"
    ],
    "Lecce" => [
        "4", "4", "2"
    ],
    "Milan" => [
        "4", "2", "3", "1"
    ],
    "Monza" => [
        "4", "2", "3", "1"
    ],
    "Napoli" => [
        "4", "3", "3"
    ],
    "Roma" => [
        "4", "3", "3"
    ],
    "Salernitana" => [
        "4", "3", "3"
    ],
    "Sassuolo" => [
        "4", "2", "3", "1"
    ],
    "Torino" => [
        "3", "4", "1", "2"
    ],
    "Udinese" =>[
        "3", "5", "1", "1"
    ],
    "Verona" => [
        "4", "2", "3", "1"
    ],

    
];

$partite = [
"Partita 1" => [
    "Lazio" => ["3", "4", "2", "1"],
    "Salernitana" => [
        "4", "3", "3"
    ],
],
"Partita 2" => [
    "Lecce" => [
        "4", "4", "2"
    ],
    "Empoli" => [
        "3", "5", "2"
    ],
],
"Partita 3" => [
    "Torino" => [
        "3", "4", "1", "2"
    ],
    "Juventus"=> [
        "3", "5", "2"
    ],
],
"Partita 4" => [
    "Bologna" => [
        "4", "1", "4", "1"  
      ],
      "Monza" => [
        "4", "2", "3", "1"
    ],
],
"Partita 5" => [
    "Napoli" => [
        "4", "3", "3"
    ],
    "Frosinone" => [
        "4", "3", "3"
    ],
],
"Partita 6" => [
    "Sassuolo" => [
        "4", "2", "3", "1"
    ],
    "Milan" => [
        "4", "2", "3", "1"
    ],
],
"Partita 7" => [
    "Udinese" =>[
        "3", "5", "1", "1"
    ],
    "Roma" => [
        "4", "3", "3"
    ],
],
"Partita 8" => [
    "Inter" => [
        "3", "5", "2"
    ],
    "Cagliari" => [
        "3", "5", "2" 
     ],
],
"Partita 9" => [
    "Fiorentina" => [
        "4", "2", "3", "1"
    ],
    "Genoa" => [
        "3", "5", "1", "1"
    ],
],
"Partita 10" => [
    "Atalanta" => [
        "3", "4", "2", "1"
           ],
           "Verona" => [
            "4", "2", "3", "1"
        ],
],

    
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U4-W1-D1</title>
</head>
<body>
   <h1><?php

date_default_timezone_set('CET');
echo date('l jS \of F Y ');

?></h1> 



<h1>Squadre Serie A:</h1>
<ul>
    <?php 
    foreach ($squadre as $key => $value) {?>
    <ul> <?php echo $key?>
    </ul>
<?php foreach ($value as $formazioni) {?>
    <li> <?php echo $formazioni?>
    </li> <?php } ?>

    <?php
       
    }
    
    
    
    
    
    
    
    
    ?>
</ul>


<h1>Partite da giocare:</h1>

<ul>
    <?php 
    foreach ($partite as $key => $value) {?>
    <ul> <?php echo $key?>
    </ul>
<?php foreach ($value as $key => $formazioni) {?>
    <ul> <?php echo $key?>
    </ul>
    <?php foreach ($formazioni as $teams) {?>
    <li> <?php echo $teams?>
    </li> <?php } ?>

<?php
   
}}








?>
</ul>



</body>
</html>