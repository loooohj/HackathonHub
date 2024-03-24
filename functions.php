<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function t_url($url)
{
  return $_SERVER['REQUEST_URI'] === $url;
}
