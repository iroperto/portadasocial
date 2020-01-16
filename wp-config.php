<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'portadasocial' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'Roperto@1976/' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '0M94XPZ]q.[G{5Uw+<>%R|Uh=*sI38iluOjuT;J-$m{PxtH7(&P8UlZA^~Q><a-}' );
define( 'SECURE_AUTH_KEY', '=2lgoW$T9fMbrFl9:ODwZ}AktoDF:$e(QaPahi%%k8dK0ar&Kow+f_jAd4CT0-0l' );
define( 'LOGGED_IN_KEY', '5btFoLtV5aBmx;OCFtC`h&h,/1t(5ni]IYO!{c4ao$N`Jz/bLC7yxTrq[)6X4j;r' );
define( 'NONCE_KEY', 'CJI9RK#f|WD$x>ObVYCr3tOy:CiP<_Y<L$ ,`lF=5M^Z5ak0~V61a0WT#_[y* ov' );
define( 'AUTH_SALT', 'KrFJke7 uNoI!KbN$BlhylTYZW#y>M%n_m4(*3Q-6%h=8.*s6q68?kabLH)nt^@!' );
define( 'SECURE_AUTH_SALT', '98,O{]djig3ghLNU2(SnL7*!J88[|)mlwfGCs4!qPrsxRAn}8##]}G+_t*WG]Ucv' );
define( 'LOGGED_IN_SALT', 'YlxQrDorY/NHPbLFWx,Ht6c@vO Cj^p/9$4lmAqy54`~gS7/Q5/1IU}7E2rzy1&P' );
define( 'NONCE_SALT', 'Mm;]H$<yTbKLk)W2<Y.YwBd`r]jgB}#mUy)ov|731)T9..1VkEArYe:S#C?q%${=' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}
?>