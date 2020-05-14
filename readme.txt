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

Geralmente, usado na página principal, pode haver a necessidade 
de destacar as últimas postagens recentes. Com este plugin do 
wordpress, pode-se exibir as últimas notícis dos posts ou post-types 
filtrando ou não certas categorias.

Pode acontecer de querer incluir uma categoria e também querer que o post 
recete não seja incluso. Isso pode acontecer, por exemplo, se desejar 
dar destaque em outro local evitando assim a repetição do post. Nesse 
caso, incluir o parametro "exclude_first_cat". No exemplo abaixo 
queremos incluir a categoria "noticias-principais e destaque" porém 
também queremos que o primeiro post (ou o post mais recente) não seja 
incluso:

[fix158931_ultimas_noticias category="destaque,noticias-principais" exclude_first_cat="destaque"]

== Installation ==

Por estar hospedado no github, necessário baixar o plugin e logo após, 
na sua instalação do wordpress, proceder a instalação de um novo plugin, 
só que, informando que o plugin está numa fonte local. Dái é só apontar
para o arquivo zipo que acabou de baixar do github.

Este plugin está configurado de modo a receber as atualizações tão logo esteja
disponível uma nova versão repositorio do github em 
https://github.com/fixonweb/fix158931-ultimas-noticias.

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 1.0.0 =
* Lançamento

= 1.0.2 = 
* update via github

= 1.0.3 = 
* adicionado parametro exclude_first_cat

