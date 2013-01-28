<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('isError')){
    function isError($field){
	    if(isset($field) && stripos($field, "error") !== FALSE){
	        return "error";
	    }
	}
}