<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'test');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'root');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', '127.0.0.1');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pW!jMXrpN#m;y Za<cs-A$%qqv;]D#Ab7yz4{>7#|S}e-8cHUhL0,Lyh/`p]]0~l');
define('SECURE_AUTH_KEY',  '.Iz0S2gf}EP{?gX$-J+a/zw1]}nI!]8rS{1H)bXx* >ns~gZY.1L6XI5IZ41,] Q');
define('LOGGED_IN_KEY',    '6uDyziY|T+JLwC>jk}`q<fUJRA>K}lg/|9zqir1]9C+=.btBKO(;WSeEU^9nIe4A');
define('NONCE_KEY',        'FXQ.}q5n7y],Lw`(,vv7A!W22s nh4/_@3)?;XlO+4Evc38NIEy@t0eOzr-b]6h<');
define('AUTH_SALT',        'RbYZ-A.JHb<Q;.0iUe0Gx64ZJ3,6-;O=qJY2=:nSPKIo)}}h]=CY(YSvwuGOpnaS');
define('SECURE_AUTH_SALT', 'HJ_nn)yU#W)9UK-X+KfE>-fKTahIZBYnj5% mX`49:9.Pm1Iv$6ITmIA(xk`bC[{');
define('LOGGED_IN_SALT',   'kVKtlcu tX|+(4qP2#)9(!<j8`Oo#|Rp2{*%>JX?2{.Oc#1y[adn7gGayPi&>BKP');
define('NONCE_SALT',       '$e]oiSb<{/>ROEndi0@UfJ$<w+U~rg_:k}E`:L-;kyqFTVnC5htd__C|K0H&^%E$');

define('WP_HOME', '//'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', '//'.$_SERVER['HTTP_HOST']);

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'by_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
