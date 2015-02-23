<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bonus');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '419300al');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c*jMC}O[2dl ?*N&A7([y>ayHj%S96j!t$MpKl=T7T~z[)k#{f}MhYrlk_,n|EYY');
define('SECURE_AUTH_KEY',  'f)|/{.BQO~}]kCjK|_T~9C]ot!]c?D/]Gx+-TIN:|JtJB|F-:f}_9#ur_^/7ydj{');
define('LOGGED_IN_KEY',    'j]Q}{)+N40*wW1LLu%c|S]iq2e;Bg#QX #f}w{ bz|G<]}S#eG$~:;$Lk-qx`]8%');
define('NONCE_KEY',        '/jRH !oU4xLP49e)TXb?eX5$Jja A5kExE[!3it#t! JOqEHm0}%WQF-?;;.-(-o');
define('AUTH_SALT',        'cMy?+BRF~^GZU{W]t0hm+D|~O4E<^RoEQ]=^9e)+(!|<N^Nm(ke;^K2]2[qstht0');
define('SECURE_AUTH_SALT', '(-,=F_rPP+(28[lM9]8}mK|#=+~;2g}-0UnOV%`?]t[a];+~f:_4NW6X|eo`~s;U');
define('LOGGED_IN_SALT',   '=P}2(PbXcl0JTL|v#K<di:E{C^&g79|0;4/-ofsAfm%|iyID6R-3<}|fp[KN!VnK');
define('NONCE_SALT',       'V+[%9zb4`}H:4E56G?3H}-dt@adWH?BngJ%R5oPo*~4^OLr4PdeDL$MuYZ#Kfel ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'vgbhjkn_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
