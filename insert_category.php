<?php

//session_start();

do_html_header('Adding a category');
if (check_admin_user())
{ 
  if (filled_out($_POST)) 
  {
    $catname = $_POST['catname'];
    if(insert_category($catname))
      echo "Category '$catname' was added to the database.<br />";
    else
      echo "Category '$catname' could not be added to the database.<br />";
  } 
  else 
    echo 'You have not filled out the form.  Please try again.';
  do_html_url('admin', 'Back to administration menu');
}
else 
  echo 'You are not authorised to view this page.'; 


?>