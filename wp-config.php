<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
$host = php_uname('n');
var_dump($host);
if($host == "182.local"){
	define("ENVIRONMENT", "develop");
} else {
	define("ENVIRONMENT", "production");
}
if(ENVIRONMENT=="develop"){
	// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
	/** Nom de la base de données de WordPress. */
	define('DB_NAME', 'topten');

	/** Utilisateur de la base de données MySQL. */
	define('DB_USER', 'root');

	/** Mot de passe de la base de données MySQL. */
	define('DB_PASSWORD', '');

	/** Adresse de l'hébergement MySQL. */
	define('DB_HOST', 'localhost');
}


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[@]5{=LsZR4q-NX-.5!mW?cbf7~#QT*joYfb#j@A u{+lS$|R1YnN}wE]|ZF$-BH');
define('SECURE_AUTH_KEY',  'DOez!JUI2F<Q&5p+yO_$W7lx4[-I*Fqc-N/mrR6AKo[R#/CP5gKZ%.Rm%u=q#y?5');
define('LOGGED_IN_KEY',    'n=JZOvZpYSfA`#mfUsef+!P|ws<b|,4b2/=:@]nhW: >hYb-xhN{859F.i%;P+bw');
define('NONCE_KEY',        'Mu,IkAvxX-I?r{B5E3|Z><+;Lx7(_$DRR)mXxS=6f%KB^Di4%N~QU-R+:9<:&t`j');
define('AUTH_SALT',        '*;QAU5b+,q|)*]HyaJFAP#KGVMDT[AO|q}}3RorI;83We*#$A(e|uPv?G:6ps />');
define('SECURE_AUTH_SALT', '&R`?i~XD1tm1UK70Hd#Z7H-WZ6-&X+ X^T]a*7qV1!Wa$Gg<I_QV$f+N@^B$-KtV');
define('LOGGED_IN_SALT',   'y6USiu!!xsY7kEbH$l8Fk|U.-(wul!d(T-5`%F,T=fORuOOWXmi59[U_w2l7y+<t');
define('NONCE_SALT',       '81B||91DkcUm PuLmeQF[s_rw2;/0f[BANv5uW*tGY)21uVH.wH<+P@(W2d3`-S&');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = '12_01_2016_wp_';

/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
