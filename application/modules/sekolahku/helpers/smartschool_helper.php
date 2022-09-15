<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('bantuan_url'))
{
	function bantuan_url($value='')
	{
		return base_url('sekolahku/'.$value);
	}
}

if ( ! function_exists('my_media'))
{
	function my_media($value='')
	{
		return base_url('assets/sekolahku/media/'.$value);
	}
}

if ( ! function_exists('__session')) {
   function __session( $session_key ) {
      $CI = &get_instance();
      return $CI->session->userdata( $session_key );
   }
}

if (! function_exists('get_ip_address')) {
	function get_ip_address() {
		return getenv('HTTP_X_FORWARDED_FOR') ? getenv('HTTP_X_FORWARDED_FOR') : getenv('REMOTE_ADDR');
	}
}