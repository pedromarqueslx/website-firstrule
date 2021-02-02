<?php
/**
 * A configuração de base do WordPress
 *
 * O script de criação do ficheiro wp-config.php usa este ficheiro durante
 * a instalação. Não precisa de usar o site pode copiar este ficheiro como
 * "wp-config.php" e preencher os valores
 *
 * Este ficheiro contém as seguintes variáveis:
 *
 * * Definições de MySQL
 * * Chaves secretas
 * * Prefixo das tabelas nas base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'pg2rcnax_firstrule');
/** O nome do utilizador de MySQL */
define('DB_USER', 'pedro@26374');
/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'pedro@26374');
/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');
/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');
/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');
/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+_-8XM1p~W~wz~aJ2zt@dA: <z$pzrWK43G!C1P]3&r|w?>;Bp@ym7&H>3).oTBU');
define('SECURE_AUTH_KEY',  ';ty6E@;;8]:$[`|A5m8;efqZ4&oHCKxnCNbCWjWn=7aQlAr@R9/RnM}2uWU~t#F/');
define('LOGGED_IN_KEY',    'B9s|3/YO,nT(.@.D0j aS$L/8!Eca`u5Fp5`+9]E:jE2#ho@;zz>}B$Vh+G$GQKK');
define('NONCE_KEY',        '.~*7:&Q0UMci( 1me~Gah/B>F/s0;Yy9d{!1I<{@4b:6Xg)Y%[E-Nw:Mt`Cu~aF ');
define('AUTH_SALT',        'k%~fD$rM4=PYJ]kgt5Eo0;W~s7;OKWqrvz=$qIGI9TOZKbl5w.gM1C$#{CiyQ4ri');
define('SECURE_AUTH_SALT', 'tZvp>ry<#*j-7=M;J3sM]Nf$(_)QJv5x~:w6%YvB`~EM79W{j{@6j!:.5==YX!-J');
define('LOGGED_IN_SALT',   'DV|:)x!}ooIj9q#gJLjZtX``/[q:YDb1Wl]CBPv9B>&juWvan9kZ&|d:*kcV7!p9');
define('NONCE_SALT',       'J3*/VYDA3fmu}l B;h[>w*o:$Owj<K{3>;^9N3gI0OKP $OoVt:r#~)S/R=+X1))');
/**#@-*/
/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_cenes';
/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* E é tudo. Pare de editar! */
/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
