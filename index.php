<?php
  // The shopping cart needs sessions, so start one
  do_html_header('Welcome to BookShop');

  echo '<p>Please choose a category:</p>';

  // get categories out of database
  $cat_array = get_categories();
 
  // display as links to cat pages
  display_categories($cat_array);
 
  // if logged in as admin, show add, delete, edit cat links
  if(isset($_SESSION['admin_user']))
  {
    display_button('admin', 'admin-menu', 'Admin Menu');
  }
?>