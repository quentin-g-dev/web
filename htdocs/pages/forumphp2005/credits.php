<?php
require_once '../../include/prepend.inc.php';

// TODO: Mettre cela dans la base de données
$personnes=array(
    array('nom'     => 'Cyril Pierre de Geyer',
          'code'    => 'cpierredegeyer',
          'societe' => 'Anaska',
          'tache'   => 'Coordination du Forum 2005',
          'site'    => 'formation.anaska.fr',
          'image'   => 'logo_anaska.gif',
          'texte'   => 'Les formations dispensées par Anaska sont des <a href="http://formation.anaska.fr/plan.php">formations dédiées aux technologies du monde OpenSource</a>. Ses formateurs sont des formateurs engagés dans l\'effort communautaire et sont à la pointe de leur technologies. Ils ont été sélectionné par MySQL comme partenaire sur les <a href="http://formation.anaska.fr/formation-mysql.php">formations MySQL</a> en France.<br /><br />Ils participent à l\'effort OpenSource au travers de contributions sur Java, MySQL, PHP, OpenOffice et Linux. Ils sont également membre du club Mandriva.'),

 	array('nom'     => 'Emmanuelle Bessez',
          'societe' => 'Kreactiv',
          'tache'   => 'Aide à la réalisation du communiqué de presse',
          'site'    => 'www.kreactivstudios.com',
          'image'   => 'logo_kreactiv.gif',
          'texte'   => 'Kreactiv\'Studios est une agence de conseil en communication qui vous accompagne dans l\'élaboration d\'une stratégie cohérente et forte, et réalise pour vous des supports originaux et pertinents.'),

 	array('nom'     => 'Alexandre Coutant',
          'societe' => 'Ass2l',
          'tache'   => 'Aide à l\'organisation et à la promotion',
          'site'    => 'www.ass2l.org',
          'image'   => 'logo_ass2l.gif',
          'texte'   => 'L\'ASS2L est l\'Association des Sociétés de Services en Logiciels Libres. L\'ASS2L a pour objectif de représenter les sociétés de services en logiciels libres (SSLL ou SS2L) au niveau national et européen.'),


    array('nom'     => 'Damien Seguy et ses collaborateurs',
          'societe' => 'Nexen Services',
          'tache'   => 'Hébergement du site Internet',
          'site'    => 'www.nexenservices.com',
          'image'   => 'logo_nexenservices.gif',
          'texte'   => 'Leader de l\'hébergement Open Source, Nexen Services met à votre disposition ses solutions d\'hébergement performantes et sécurisées.<br />Avec une gamme compléte de solutions et de services d\'hébergement, ils répondent à chacun de vos besoins d\'hébergement que ce soit sur plate-forme mutualisée, dédiée et même dédiée virtuelle !'),

    array('nom'     => 'Perrick Penet',
          'code'    => 'ppenet',
          'societe' => 'No Parking',
          'tache'   => 'Coordination du Forum 2005',
          'site'    => 'www.noparking.net',
          'image'   => 'logo_noparking.gif',
          'texte'   => 'No Parking édite et commercialise un <a href="http://www.noparking.net/opentime">logiciel web de gestion de temps et de suivi d\'activité : openTIME</a>. Véritable SSIII (le troisième I est pour "Internet"), elle intervient aussi sur des <a href="http://www.noparking.net/services/">intranets / extranets</a> en particulier sur les problématiques de ressources humaines (travail collaboratif, management, formation, communication).'),

    array('nom'     => 'Jean-Marc Fontaine',
          'code'    => 'jmfontaine',
          'societe' => 'Odeyssa',
          'tache'   => 'Logistique, site internet',
          'site'    => 'www.odeyssa.com',
          'image'   => 'logo_odeyssa.gif',
          'texte'   => 'Odeyssa est une jeune société dynamique composée de passionnés de nouvelles technologies de l\'information et de la communication. Elle réalise toutes sortes de sites Internet pour le compte de ses clients.'),

    array('nom'     => 'Romain Desplanques',
          'societe' => 'Figem',
          'tache'   => 'Design des bannières publicitaires et des affiches',
          'site'    => 'www.figem.fr',
          'image'   => 'logo_figem.gif',
          'texte'   => 'Figem propose des solutions de relation client basées sur les outils Internet. Sa solution Figem F1 permet de facilement mettre en place un site web et d\'en faire une plate-forme de relation électronique performante.'),

    array('nom'     => 'Romain Bourdon',
          'societe' => 'Kaptive',
          'tache'   => 'Organisation de l\'accueil et des repas',
          'site'    => 'www.kaptive.com',
          'image'   => 'logo_kaptive.jpg',
          'texte'   => 'Kaptive est un studio de développement informatique spécialiste du PHP et des technologies Internet depuis 2000. Notre structure modulaire permet de couvrir tous les besoins des entreprises, de la prestation ponctuelle à la gestion de projets complexes.'),

    array('nom'     => 'Guillaume Ponçon',
          'code'    => 'gponcon',
          'societe' => 'Travelsoft',
          'tache'   => 'Logistique, reportage',
          'site'    => 'www.travelsoft.fr',
          'image'   => 'logo_travelsoft.gif',
          'texte'   => 'Travelsoft est leader des technologies web au service du voyage. Ses experts sont spécialisés en technologies J2EE et PHP.'));
$smarty->assign('personnes', $personnes);

$smarty->display('credits.html');
?>