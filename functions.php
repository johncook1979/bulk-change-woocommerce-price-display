/**
  * Add the following to your theme functions file of your child theme
  *
  * Note: Any maths equations can be used. eg. * 1.5 will increase the price by 50%. / 2  will halve the price.
  *
*/

// Sitewide
add_filter( 'woocommerce_product_get_price', 'my_increase_price', 10, 2 );

function my_increase_price( $price ){

  return $price + 6; // + 6 is the value to increase the price by. To decrease by 6 use - 6

}


/**
 *
 * you can further enhance the code above to apply it by category
 * Interchange product_cat and product_tag for categories and tags. Use the OR (||) operator to apply it to multiple terms
 *
*/

// Only to specific terms
add_filter( 'woocommerce_product_get_price', 'my_increase_price_terms', 10, 2 );

function my_increase_price_terms( $price ){

  if ( has_term( 'shirts', 'product_cat' ) ) {
    return $price + 6; // + 6 is the value to increase the price by. To decrease by 6 use - 6
  }
}


