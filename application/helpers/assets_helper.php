<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('css_url')) {

    function css_url($name) {
        return base_url() . 'application/assets/styles/' . $name . '.css';
    }

}

if (!function_exists('js_url')) {

    function js_url($name) {
        return base_url() . 'application/assets/scripts/' . $name . '.js';
    }

}

if (!function_exists('doc_url')) {

    function doc_url($name) {
        return base_url() . 'application/assets/doc/' . $name;
    }

}

if (!function_exists('img_url')) {

    function img_url($name) {
        return base_url() . 'application/assets/images/' . $name;
    }

}

if (!function_exists('img')) {

    function img($name, $alt = '') {
        return '<img src="' . img_url($name) . '" alt="' . $alt . '" />';
    }

}