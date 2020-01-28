<?php
require './classes/voiture.php';

$voiture1 = new Voiture( 'lada','Niva','Blanc', [2000,1500,800], 1000  );
$voiture2 = new Voiture('Nissan','Cube','violet',[2500, 1800, 1200],1200);



$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

echo $voiture1->calculerEnergieCinetique().'<br>';
$voiture1->vitesse= 20;
echo $voiture1->calculerEnergieCinetique();


