<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoloader.php';
spl_autoload_register('classAutoLoader');
//Le  @  devant une fonction par exmemple permet de ne pas afficher le message d'erreur

Log::logWrite('oui');

$formulaire = new Form('index.php?page=validation','FrmContact');

$html = $formulaire->beginHtml( 'je fait des formulaires en objet');
echo $formulaire->displayForm();
$html .= $formulaire->endHtml();
echo $html;





