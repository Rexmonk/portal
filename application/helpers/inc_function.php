<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('meta_hash'))
{
    function meta_hash($var = '')
    {	//meta_hash_salt defined in constants.php
		$metahash = md5(meta_hash_salt.$var);
        return $metahash;
    }   
}

  if ( ! function_exists('asset_url()'))
     {
       function asset_url()
       {
          return base_url().'assets/';
       }
     }
?>