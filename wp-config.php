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
define('DB_NAME', 'prueba_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '~blh:afFofLhWi|.i~0m]IL%g:/jd+|>+C8-;qmRmu!T`Lohdp`5G)kyU*Co3dsw');
define('SECURE_AUTH_KEY', '3nZ]eR<BL~W]-sL:iDzH=86jos1j<E/&: Dn4MI.6Uxb$Z$bbe 5EqA7VHTv72q#');
define('LOGGED_IN_KEY', 'GBT;JkPphK}5(KQ#YOC(e[|]sdVw5k~IN^+iP7QxcPbtic>m27OnrgY%7TiQz1ix');
define('NONCE_KEY', '9r=>z>^1WS0C;(v&&Um7Ew2E?&C 3ZCZ(t/F[2%zaC[h*skrt]~dSuiD}tQ}Q+.R');
define('AUTH_SALT', '01V*Wkn0W]tq]+0)W8Xt#J]&K!4r>xh/$bUtL(|5:SZie714[Pg4!1]w)#19!C18');
define('SECURE_AUTH_SALT', ':exO,A}2AMw6<kwE>.EoRJ+rdR_W?<oYmi:,G;E-w4XJnRFX*Z4sdqQE@QBRA-Xm');
define('LOGGED_IN_SALT', '?]wZAVYE@q0n,S!8fpK^(xFUW/9RDGt.B1XCNqHM8(_!^^h66p@--:gbtRzP_d~8');
define('NONCE_SALT', 'pf%h@%&th+Qhu%wcNG9x 0:f[TK+`F,#>P<q[lhsJ(u&2;AZ):Kt[I(x:3D.#E)P');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

