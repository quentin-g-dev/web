<?php
require_once '../../include/prepend.inc.php';
require_once dirname(__FILE__) . '/_config.inc.php';
require_once AFUP_CHEMIN_RACINE . 'classes/afup/AFUP_Inscriptions_Forum.php';
$inscriptions = new AFUP_Inscriptions_Forum($bdd);

$inscriptions->ajouterRappel($_POST['email']);
$smarty->display('inscriptions_rappel.html');
?>