<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoloader.php';
spl_autoload_register('classAutoLoader');

$formulaire = new Form('index.php?page=validation','FrmContact');

$html = $formulaire->beginHtml( 'je fait des formulaires en objet');
echo $formulaire->displayForm();
$html .= $formulaire->endHtml();
echo $html;




