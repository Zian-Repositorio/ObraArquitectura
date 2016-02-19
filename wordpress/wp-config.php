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
define('DB_NAME', 'ObraAD');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'mayra10087/3');

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
define('AUTH_KEY', 'f4KBy_sY}>y_=Y:o0L~q!man;P-cYX# %6.)ir(K4sUd.8W-E:J0[+z,ee{d5sTa');
define('SECURE_AUTH_KEY', ';_h#Rw3l|DF,tEZz|[{P^`jaH_06()-^|[Rvk%%!h=H,KN?_gj2CB:w{HjLE+#Ir');
define('LOGGED_IN_KEY', '$:d0tO.QLe~#lu^T9*Ca]wIdvOkY-|.8UC_~M2(Jv%QG=5>@7W!@t6{L^e6u|D1U');
define('NONCE_KEY', 'b|K>K~A>(Gc0MX|PN):~!]u@}-#C*V9=^6,?>uC%e<|zh;*r8Ypm^ikLKC.4a-~Q');
define('AUTH_SALT', 'hM#4VIvy%u;%//yY8cELmeR|!+6l`=4gds{V)<&q=*xq5BKaDf<_fpX_P~B;/.8K');
define('SECURE_AUTH_SALT', 'N>ndHWjK2r__8S}qGv*t/crd9*nUN3L%xBU5q_F)w|W})PeF3ib71;O.Bk8j8w>y');
define('LOGGED_IN_SALT', 'T}1^9Zv%QhtyyxaTroE-bgz,OiK+^Rz!Q|lv0-|,2Zie<;s5!9yT5NX&)e6V+M(x');
define('NONCE_SALT', 'JOJn[JE}Zf[v*e*k|d-+n4LrosHto.NNo$xbN<=SzBbn>pYyF%#Hm(vXTuA$`h;O');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'Obra';


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

