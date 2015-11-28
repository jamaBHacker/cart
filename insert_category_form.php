<?php

//session_start();

do_html_header('Add a category');
if (check_admin_user())
{
  display_category_form();
  do_html_url('admin', 'Back to administration menu');
}
else
  echo 'You are not authorized to enter the administration area.';


?>