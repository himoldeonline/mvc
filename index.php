<?php
function br () {
  echo '<br>';
}
echo 'This is the controller for the MVC';
br();
echo 'Script Location: ' . __FILE__;
br();
echo 'Request URI: ' . $_SERVER['REQUEST_URI'];
br();
echo 'Query String: ' . $_SERVER['QUERY_STRING'];
br();
if (array_key_exists('REDIRECT_QUERY_STRING', $_SERVER)) {

  if ($_SERVER['REDIRECT_QUERY_STRING'] == 'hello') {
    echo 'HELLO';
  }

  echo 'Redirect Query String: ' . $_SERVER['REDIRECT_QUERY_STRING'];
}
else {
  echo 'Redirect Query String: None';
}
