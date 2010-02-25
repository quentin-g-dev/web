<?php
require_once '../../include/prepend.inc.php';

// TODO: Mettre cela dans la base de données
$sponsors=array(
    array('nom'   => 'Adobe',
          'site'  => 'www.adobe.fr',
          'logo'  => 'logo_adobe.gif',
          'texte' => "Adobe révolutionne l'échange d'idées et d'informations. Depuis vingt cinq ans, les
technologies et les logiciels réputés de cet éditeur redéfinissent la communication des
entreprises, du marché des loisirs et des particuliers en établissant de nouveaux standards
de production et de diffusion de contenus véritablement fascinants - partout et à tout
moment. À travers des images d'une remarquable richesse visuelle pour l'impression, la
vidéo et le cinéma ou du contenu numérique dynamique adapté à une multitude de sup-
ports, l'impact des solutions est évident et peut être ressenti par quiconque crée, visualise
et manipule des informations. Fort de sa réputation d'excellence et d'une gamme consti-
tuée de nombreux produits parmi les plus appréciés et les plus connus du marché, Adobe
est l'un des principaux éditeurs de logiciels mondiaux les plus diversifiés."),
    array('nom'   => 'Anaska',
          'site'  => 'www.anaska.com',
          'logo'  => 'logo_anaska_petit.gif',
          'texte' => '<a href="http://www.anaska.com">Anaska</a> est le spécialiste des formations sur les technologies OpenSource en France. En partenariat avec MySQL AB, Talend, Mandriva, Zend et d\'autres acteurs de la communauté, Anaska propose un catalogue de plus de <a href="http://www.anaska.com/plan.php">50 formations dédiés aux technologies du libre</a> ainsi que des formations de préparation aux <a href="http://www.anaska.com/formation-linux.php">certifications Linux</a>, <a href="http://www.anaska.com/formation-mysql.php">MySQL</a>, <a href="http://www.anaska.com/formation-php.php">PHP</a> et <a href="http://www.anaska.com/formation-postgresql.php">PostgreSQL</a>. Les formateurs Anaska sont très impliqués dans les différentes communautés libres et en particulier dans le monde PHP.'),
    array('nom'   => 'eZ',
          'site'  => 'ez.no/fr',
          'logo'  => 'logo_ezsystems.gif',
          'texte' => 'eZ systems est le créateur d\'eZ Publish, le système de gestion de contenu Open Source pour le monde de l\'Entreprise. A l\'aide d\'un business modèle Open Source pour l\'Entreprise, nous associons le professionnalisme d\'un éditeur de logiciels pour les entreprises avec un modèle de développement et de distribution Open Source et la responsabilité totale du produit. Cette combinaison permet d\'associer les valeurs d\'ouverture et de partage de la philosophie d\'eZ à un modèle économique viable. eZ propose des <a href="http://www.anaska.com/formations/formation-ez-publish.php">formations à eZ Publish</a> <a href="http://ez.no/fr/services/training">directement</a> ou via son partenaire <a href="http://www.anaska.com">Anaska</a>.'),
    array('nom'   => 'No Parking',
          'site'  => 'www.noparking.net',
          'logo'  => 'logo_noparking_petit.gif',
          'texte' => '<a href="http://www.noparking.net/">No Parking</a> développe notamment le <a href="http://www.noparking.net/opentime/index.php">logiciel de gestion du temps OpenTime</a>.')
    );
$smarty->assign('sponsors', $sponsors);

$partenaires=array(
    array('nom'   => 'Eyrolles',
          'site'  => 'www.editions-eyrolles.com',
          'logo'  => 'logo_eyrolles.gif',
          'texte' => 'Les Editions Eyrolles ont placé PHP au coeur de leur offre Développeurs, de l\'initiation (<a href="http://www.editions-eyrolles.com/Livre/9782212114072/php-5">manuels avec cours et exercices</a>, <a href="http://www.editions-eyrolles.com/Livre/9782212116786/php-mysql-et-javascript">apprentissage par la pratique</a>) à l\'exploitation professionnelle (<a href="http://www.editions-eyrolles.com/Livre/9782212116694/php-5-avance">livres de référence</a>, <a href="http://www.editions-eyrolles.com/Livre/9782212112344/php-5">études de cas détaillées</a>). Au-delà de la maîtrise de PHP, chaque ouvrage offre un véritable savoir-faire métier au développeur. Suivez les nouveautés Eyrolles en vous abonnant au fil RSS <a href="http://www.editions-eyrolles.com/rss.php?q=php">http://www.editions-eyrolles.com/rss.php?q=php</a> !'),
    array('nom'   => 'FNILL',
          'site'  => 'www.fnill.org',
          'logo'  => 'logo-fnill.png',
          'texte' => 'La fédération Nationale de l\'Industrie du Logiciel Libre a pour objectif de représenter les sociétés de services en logiciels libres (SSLL ou SS2L) au niveau national et européen.'),

    array('nom'   => 'TooLinux',
          'site'  => 'www.toolinux.com',
          'logo'  => 'logo-toolinux.png',
          'texte' => 'TOOLINUX.com est un quotidien d\'information sur Linux et les logiciels Libres. Généraliste, il offre chaque jour une revue de presse en ligne et des articles traitant du mouvement opensource, de l\'économie du libre ainsi que des logiciels Linux ou multi-plateformes. Depuis l\'été 2006, TOOLINUX.com s\'ouvre à la problématique de l\'interopérabilité des solutions informatiques.'),

    array('nom'   => 'Linagora',
          'site'  => 'www.linagora.com',
          'logo'  => 'logo-linagora.png',
          'texte' => 'Créateur des concepts de SS2L et de TM2L, LINAGORA se définit désormais comme un Editeur Orienté Service. Sa vocation est d\'être un spécialiste de l\'Open Source et d\'être un intermédiaire de confiance entre les communautés du logiciel libre ou des éditeurs Open Source d\'une part et les utilisateurs ou intégrateurs d\'autre part.'),


    array('nom'   => 'Programmez !',
          'site'  => 'www.programmez.com',
          'logo'  => 'logo_programmez.gif',
          'texte' => 'Avec plus de 30.000 lecteurs mensuels, PROGRAMMEZ ! s\'est imposé comme un magazine de référence des développeurs.'));
$smarty->assign('partenaires', $partenaires);


$smarty->display('sponsors.html');
?>