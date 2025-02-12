<?php
define('DB_NAME', 'fedwrqmy_ogabal');
define('DB_USER', 'fedwrqmy_wpuser');
define('DB_PASSWORD', 'MANdog0709');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Generate these using https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '[.F<@AVc!F_L:efK8Y=08Uv#9ASI?~FsuP;?>RY;jrPY.lK^JjMksDC-*Q/E8ej-');
define('SECURE_AUTH_KEY',  '%)Z$m!~T:1Gf*)bzsv.+4:w)#+#@}K)7_auv-jJCU|_!wP]u0g%19GC[@ ?A-iaE');
define('LOGGED_IN_KEY',    '.[oEeZ~2+APCL5zsnW|.^$`bWilx7|m*r um,5gPM.5PHbOa,Fw]0xeb|A$ZJVat');
define('NONCE_KEY',        'M;LvuwH8S>YCk6P xcY>K 263&1!`A|G0R4.gy(0g_@~jOS3ZWFqK7-B2_|?8qSS');
define('AUTH_SALT',        '; zZ=,eNpqHO11E-sjX.hX0I+W1$a<aRU*HsXNuuyhe=$Z_oS(ar~YZQ$m<,bb7`');
define('SECURE_AUTH_SALT', '%DW_+Ox>!Pvk8iIOJBdp5mLrP(B%d$+;a#`qyuG0J`X+ln>hO$Iq-QdJE{x3fZ4#');
define('LOGGED_IN_SALT',   '+NR`Lo>sraVA5 2RFPud/*t`P}y5(rp%qd{]]= L=21}l !C9w >IGS[Gkw7hDfe');
define('NONCE_SALT',       '|xM:>|I<A9y4`eY=m`-.g|ul]6^wBn(hi[&w-|4+v0Kw7}m/m##FC<F;S#eI?{rE');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php'; 