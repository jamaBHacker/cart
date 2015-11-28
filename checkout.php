<?php

  // The shopping cart needs sessions, so start one
  //session_start();

  do_html_header('Checkout');
  
  if(isset($_SESSION['cart'])&&array_count_values($_SESSION['cart']))
  {
    display_cart($_SESSION['cart'], false, 0);
    display_checkout_form();
  }
  else
    echo '<p>There are no items in your cart</p>';
 
  display_button(base_url("index.php").'/cart/show_cart', 'continue-shopping', 'Continue Shopping');  

?>