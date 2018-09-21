/*
Hides products within subcategory pages from showing in the category page view.
Add to bottom of functions.php file under the child theme
*/


function exclude_product_cat_children($wp_query) {
	if ( isset ( $wp_query->query_vars['product_cat'] ) && $wp_query->is_main_query()) {
    	$wp_query->set('tax_query', array(
            array (
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $wp_query->query_vars['product_cat'],
                'include_children' => false
            )
		) );
  	}
}
add_filter('pre_get_posts', 'exclude_product_cat_children', PHP_INT_MAX );
