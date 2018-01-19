<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'gms');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}tYa,F*@sRN]D3%=6A>u,&v3tzc<E1@XO+*}~hh!xP,/aF4;a<bs12gs#Ghi&**V');
define('SECURE_AUTH_KEY',  'D)*Dv*Cnx9Nuf9ZdH#nM$s(!jW/F#]2!S)JCtRd;~kjja%JOGi0h(`/i-s!V.#4v');
define('LOGGED_IN_KEY',    's,w<RaN=y-(dbt.dw/!$SzHlcPg.$]`r^I/kCxBGpEaC%yB&sR{s4P*{Z;`(DiUr');
define('NONCE_KEY',        '!j186#+g==sS8r)0,Th}!4>Q<+ggIU?yOB+v=YbNC1z_#bkV?dL/OnGbQso)hQ;8');
define('AUTH_SALT',        'h,RSUX<-o}o6>I(D+k^1Y8|GFS[(*1*]0hm+X1aD#gXWEuN.)$5Xu6_KhAatiq60');
define('SECURE_AUTH_SALT', '^77-NU2)m:C356I:QFi<NRptM&@,ppp3aI:0-}CS@-2P]@Gcz-.Ju1f%vu<O_t0E');
define('LOGGED_IN_SALT',   'i&@)bbv{4q[4pBNT~gT,XC,,xNr`y^IptgKWsZj?C+St|78vg@mu>|YoRB}! fb*');
define('NONCE_SALT',       '@~yg!nJ~f}!q[}u%vK:4wteP.mR5cm{W ZgBGv+]nkQ>I42nJIOU?>.Kd/}k>w*v');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WC_TEMPLATE_DEBUG_MODE', true );