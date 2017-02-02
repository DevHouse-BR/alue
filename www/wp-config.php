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
define('DB_NAME', 'alue_site');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'alue_site');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Dq8mOeNurT-4');

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
define('AUTH_KEY',         '.D5Hx_/!4+T)Ar6,|W7$a.T72z1BEtW<yiIKRmFJ7;G]+(i*|`cpB7mETD?eY-+!');
define('SECURE_AUTH_KEY',  'hbm0s7L$ns_gIu{&Y[P?.sr0TRb~McR~~wL+ Z$IyO&|;K :Z*Y&<zy&b2oYjB6O');
define('LOGGED_IN_KEY',    'Ed &=e0+]jahh9+%kRcQ-5KV,UY%+`bd@;,_iCl:}|*r^3HK${.QN|RQk,o+V_H4');
define('NONCE_KEY',        'qvJ6@~h|(U|4E0o&{fpSW`<7?!W<{WUij}VNv[o{d(ZM8+m/P40|VsuL|(MmfNGG');
define('AUTH_SALT',        'lLdm4:b[lLe!;U^KEGh5]d6+UC>s/Z:o`q2xmoU-cCcd:<L)&BQFDjBy.yunjCh#');
define('SECURE_AUTH_SALT', '+FrxP!)W8:|YH2B;xor-}Uf}ocd*N*v2lYveJ TA|WJ=NvM1;~]GXM*.-Pv0W|uX');
define('LOGGED_IN_SALT',   '(3e$Wuj>M9H?H6`%%s7:o;w0MvdI&:IC{@eZwN(L+<vioAw-dG_8M.~?1K0J_wu,');
define('NONCE_SALT',       'L>EssF^!59d[y3zXAKTApUqf9eV@{;0;P+02ow0V+hQ6Nr.Nzw  j+-**US5/qD)');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'allueewp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);


define('FS_METHOD', 'direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
