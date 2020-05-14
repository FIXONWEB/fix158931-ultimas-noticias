=== FIXONWEB - Últimas Notícias ===
Contributors: fixonweb
Donate link: https://example.com/
Tags: comments, spam
Requires at least: 4.5
Tested up to: 5.4.1
Requires PHP: 5.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shortcode que mostra as últimas 4 noticias recentes.

== Description ==

Geralmente, usado na página principal, pode haver a necessidade de destacar as últimas postagens recentes. Com este plugin do wordpress, pode-se exibir as últimas notícis dos posts ou post-types filtrando ou não certas categorias.

Pode acontecer de querer incluir uma categoria e tambem querer que o post recete não seja incluso. Isso pode acontecer, por exemplo, se desejar dar destaque em outro local evitando assim a repetição do post. Nesse caso, incluir o parametro "exclude_first_cat". No exemplo abaixo queremos incluir a categoria "noticias-principais e destaque" porém tambem queremos que o primeiro post (ou o post mais recente) não seja incluso; 
[fix158931_ultimas_noticias categosy="destaque,noticias-principais" exclude_first_cat="destaque"]

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 1.0.0 =
* Lançamento

= 1.0.2 = 
* update via github