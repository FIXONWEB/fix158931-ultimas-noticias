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
queremos incluir as categorias "noticias-principais" e "destaque" porém 
também queremos que o primeiro post (ou o post mais recente) da categoria 
destaque não seja incluso na lista:

[fix158931_ultimas_noticias category="destaque,noticias-principais" exclude_first_cat="destaque"]

== Installation ==

Por estar hospedado no github, necessário baixar o plugin e logo após, 
na sua instalação do wordpress, proceder a instalação de um novo plugin, 
só que, informando que o plugin está numa fonte local. Dái é só apontar
para o arquivo zipo que acabou de baixar do github.

Este plugin está configurado de modo a receber as atualizações tão logo esteja
disponível uma nova versão repositório do github em 
https://github.com/fixonweb/fix158931-ultimas-noticias.

Pode acontecer que devido a necessidade de configurações mais especificas este plugin pode poderia ser copiado e na nova cópia ser aplicado certas modificações, tornando assim, esse plugin como um ponto de partidas a se obter algo bem mais personalizavel.

Esse plugin também pode ser fornecido como um add-in do plugin fixon-developer, como é o caso de evitar a instalação de muitos plugin do mesmo autor FIXONWEB. Tal plugin foi concebido com o propósito de separar as funções em módulos ao mesmo tempo que evitar a instalação de muitos plugins. 

Os plugins premium pode ter sua fonte de update apontada para um repositório particular bem específico onde somente através de chaves de API é que poderia ser realizados as atualizações. Entende-se como plugin premium quando o cliente solicitam certos ajustes e que por motivos diversos não quer que o plugin fique no espaço público tornando assim algo exclusivo.



== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 1.0.0 =
* Lançamento

= 1.0.2 = 
* update via github

= 1.0.3 = 
* adicionado parametro exclude_first_cat

