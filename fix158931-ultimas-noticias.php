<?php
/**
 * Plugin Name:     FIXONWEB - Últimas Notícias
 * Plugin URI:      https://github.com/fixonweb/fix158931-ultimas-noticias
 * Description:     Shortcode que mostra as últimas 4 noticias recentes
 * Author:          FIXONWEB
 * Author URI:      https://github.com/fixonweb
 * Text Domain:     fix158931
 * Domain Path:     /languages
 * Version:         1.0.3
 *
 * @package         Fix158931
 */

//fix158931

/*
1.0.0 - start
1.0.2 - update via github
1.0.3 - adicionado parametro exclude_first_cat

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker('https://github.com/FIXONWEB/fix158931-ultimas-noticias', __FILE__, 'fix158931-ultimas-noticias/fix158931-ultimas-noticias');

add_shortcode("fix158931_ultimas_noticias", "fix158931_ultimas_noticias");
function fix158931_ultimas_noticias($atts, $content = null){

	extract(shortcode_atts(array(
		"post_type" => 'post',
		"numberposts" => 4,
		"category" => '',
		"exclude_first_cat" => ''
	), $atts));

	//--------------------------------filtrar exclude - ini
	$posts_exclude_array = array();
	if($exclude_first_cat){
		$exclude_first_cat = preg_replace("/ /", "", $exclude_first_cat); //retirar os espaços
		$exclude_first_cat_a = explode(",", $exclude_first_cat); //tranformar em array
	    $args_excludes = array(
	        'post_type' => $post_type,
	        'posts_per_page' => 1
	    );
        $args_excludes['tax_query'][] = array(
            'taxonomy'  => 'category',
            'field'     => 'slug',
            'terms'     => $exclude_first_cat_a
        );
		$posts_excludes = get_posts( $args_excludes );
		foreach ($posts_excludes as $posts_exclude) {
			$posts_exclude_array[] = $posts_exclude->ID;
		}
	}
	//--------------------------------filtrar exclude - end
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $numberposts,
        'exclude' => $posts_exclude_array
    );
    if($category){
    	$category = preg_replace("/ /", "", $category);
    	$category_a = explode(",", $category);
        $args['tax_query'][] = array(
            'taxonomy'  => 'category',
            'field'     => 'slug',
            // 'terms'     => array( 'destaque', 'noticias-principais' )
            // 'terms'     => array( 'destaque' )
            'terms'     => $category_a
            // 'operator'  => 'IN'
        );
    }
	$posts = get_posts( $args );
	ob_start();
	?>
		<style type="text/css">
			.border_red {
				border: 0px solid red;
				font-size: 90%;	
			}
			.fix158931_1 {
				display: grid;
				grid-template-columns: 80px 1fr;
				grid-column-gap: 10px;
				grid-row-gap: 10px;
				/*padding: 10px;*/
			}

			.fix158931_1 .fix-image {
				border: 1px solid silver;
				height: 60px;
				background-size: cover;
			}
			.fix158931_1 .fix-texto {

			}
			.fix158931_1 .fix-texto .fix-data {
				color: #3a6b96;
				line-height: 1;
			}
			.fix158931_1 .fix-texto .fix-title {
				line-height: 1;
				color: #3a6b96;
				font-weight: bold;
			}
			.fix158931_1 .fix-texto .fix-content {
				line-height: 1;
				color: #727874;
				font-weight: gray;
				padding-top: 4px;
				font-weight: 500;
			}

		</style>

		<?php $i=0; ?>
		<?php foreach ($posts as $post) { ?>

			<?php 
			$post_date = date('d/m', strtotime($post->post_date));
			$post_title = $post->post_title;
			$content = $post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			$content = wp_trim_words( $content, 9 );
			// $img_url = get_the_post_thumbnail_url($post->ID,'full'); 
			$img_url = get_the_post_thumbnail_url($post->ID,'medium'); 
			// $img_url = wp_get_attachment_url($post->ID, 'medium' );

			// echo "img_url: $img_url";
			?>

			<?php if($i) echo '<div style="height:10px;"></div>'; ?>
			<a href="<?php echo $post->guid ?>">
				<div class="fix158931_1 border_red">
					<div class="fix-image border_red" style="background-image: url('<?php echo $img_url ?>');" >
						
					</div>
					<div class="fix-texto border_red">
						<div class="fix-data"><?=$post_date ?></div>
						<div class="fix-title"><?=$post_title ?></div>
						<div class="fix-content"><?=$content ?></div>
					</div>
				</div>
			</a>
			<?php $i++; ?>
		<?php } ?>
	<?php
	// echo '<pre>';
	// print_r($posts_exclude_array);
	// echo '</pre>';
	return ob_get_clean();
}


// Showing multiple post types in Posts Widget
add_action( 'elementor/query/my_custom_filter33', function( $query ) {
	// Here we set the query to fetch posts with
	// post type of 'custom-post-type1' and 'custom-post-type2'
	$query->set( 'offset', '1' );
	//'offset'         => 1,
} );