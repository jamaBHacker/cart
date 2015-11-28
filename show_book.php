<?php
  //session_start();

  $isbn = $_GET['isbn'];

  // get this book out of database
  $book = get_book_details($isbn);
  do_html_header($book['title']);
  display_book_details($book);

  // set url for "continue button"
  $target = 'index';
  if($book['catid'])
  {
    $target = baseurl().'/show_cat?catid='.$book['catid'];
  }
  // if logged in as admin, show edit book links
  if( check_admin_user() )
  {
    display_button("edit_book_form?isbn=$isbn", 'edit-item', 'Edit Item');
    display_button('admin', 'admin-menu', 'Admin Menu');
    display_button($target, 'continue', 'Continue');
  }
  else
  {
    display_button(baseurl()."/cart/show_cart?new=$isbn", 'add-to-cart', 'Add '
                   .$book['title'].' To My Shopping Cart'); 
    display_button($target, 'continue-shopping', 'Continue Shopping');
  }
  
?>