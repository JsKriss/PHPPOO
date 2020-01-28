<?php
require './classes/Vehicule.php';
require './classes/voiture.php';
require './classes/Coupe.php';

$toto = new Coupe('Peugeot','504','vert',[2000,1000,1000],1200);
var_dump($toto);

$voiture1 = new Voiture( 'lada','Niva','Blanc', [2000,1500,800], 1000  );
$voiture2 = new Voiture('Nissan','Cube','violet',[2500, 1800, 1200],1200);



$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

echo $voiture1->calculerEnergieCinetique().'<br>';
$voiture1->vitesse= 20;
echo $voiture1->calculerEnergieCinetique();


