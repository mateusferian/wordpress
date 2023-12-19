<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';$? #Uc8Hwir%d1?{JR_2MlMdu%:}+q+z/mPwBcsy3,;$KXp9S!daO73ho<4p{j~' );
define( 'SECURE_AUTH_KEY',  ':1Pd3Qgqi#S3VMLmog4Yfsekx,8+[g|rfzBz_NkI{p,hbP/eSIQQaqfN&*VVb)Nb' );
define( 'LOGGED_IN_KEY',    '9m{@(oB%4Cghdq|lRReNcn}@5ZYD6*sKxV9=KVSMZx-^o/4H:8PQjo%k2~#{P]ZU' );
define( 'NONCE_KEY',        '17RMKis7BSwdJ7oIY<n^<]wH==p5HR6A~:wf<yEvESWru*U.nF_9vs)e2mFoSgjJ' );
define( 'AUTH_SALT',        'mH^KFDi5yTqDv;v8&NGOXP]{Y.+CGbC Wm)P%>E,f=FZ1:z5)`viq[T_Kd!-D1]6' );
define( 'SECURE_AUTH_SALT', 'WH-.f-CBY2x:x/71;` +GARB&]Fw:3)u<~8T_ |vB:Wt`nB*ac*/QwEE=ziily?-' );
define( 'LOGGED_IN_SALT',   'V=0lxpK&o_EZQehx9]pN>ptSvk54KWSf~B:v#&rmGlTWX5i8%VR4FQRnXzj*w{in' );
define( 'NONCE_SALT',       '63)G}_kL{C0>imh.ZWlb%UB]%#tiRP?yL8g~$yw&53A()3+LG6~4KY0t8=?CVsd@' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');
