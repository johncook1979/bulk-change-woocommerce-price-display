/**
  * Add the following to your theme functions file of your child theme
  *
  * Note: Any maths equations can be used. eg. * 1.5 will increase the price by 50%. / 2  will halve the price.
  *
*/


add_filter( 'woocommerce_product_get_price', 'wc_success_academy_increase_price', 10, 2 );

function wc_success_academy_increase_price( $price ){

  return $price + 6; // + 6 is the value to increase the price by. To decrease by 6 use - 6

}
