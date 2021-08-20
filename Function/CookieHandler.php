<?php
function cookie_open()
{
  ob_start();
  date_default_timezone_set('Asia/Taipei');
}

function page_set($_file)
{
  setcookie("page", $_file, strtotime("+1 days"));
}

function photo_d_set($_photo)
{
  setcookie("photo_d", $_photo, strtotime("+1 days"));
}

function photo_h_set($_photo)
{
  setcookie("photo_h", $_photo, strtotime("+1 days"));
}

function content_set($key, $_content)
{
  setcookie("content[".$key."]", $element, strtotime("+1 days"));
}

function discuss_set($_discuss)
{
  setcookie("discuss", $_discuss, strtotime("+1 days"));
}

function cookie_close()
{
  ob_end_flush();
}
?>