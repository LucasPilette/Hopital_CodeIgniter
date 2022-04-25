<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('css_url')){
    function css_url($name){
        return base_url().'assets/css/'.$name.'.css';
    }
}

if(!function_exists('src_url')){
    function src_url($name){
        return base_url().'assets/src/'.$name.'.png';
    }
}