<?php

//session_start();

do_html_header('Edit book details');
if (check_admin_user())
{
  if ($book = get_book_details($_GET['isbn']))
  {
    display_book_form($book);
  }
  else
    echo 'Could not retrieve book details.<br />';
  do_html_url(baseurl().'cart/admin', 'Back to administration menu');
}
else
  echo 'You are not authorized to enter the administration area.';

?>