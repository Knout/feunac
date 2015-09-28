<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('css_url')) {

  function css_url($name) {
    return site_url() . 'application/assets/styles/' . $name . '.css';
  }

}

if (!function_exists('less_url')) {

  function less_url($name) {
    return site_url() . 'application/assets/styles/' . $name . '.less';
  }

}

