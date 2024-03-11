<?php

// URL
$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"];
$root2 = './';


// relative_path
$concept            = (strpos($url, '/concept/')             !== false);
$location           = (strpos($url, '/location/')            !== false);
$design             = (strpos($url, '/design/')              !== false);
$plan               = (strpos($url, '/plan/')                !== false);
$type               = (strpos($url, '/type/')                !== false);
$quality            = (strpos($url, '/quality/')             !== false);
$brand              = (strpos($url, '/brand/')               !== false);
$map                = (strpos($url, '/map/')                 !== false);
$outline            = (strpos($url, '/outline/')             !== false);

if (
   ($concept   === true) ||
   ($location  === true) ||
   ($design    === true) ||
   ($plan      === true) ||
   ($type      === true) ||
   ($quality   === true) ||
   ($brand     === true) ||
   ($map       === true) ||
   ($outline   === true)
 ) {
   $root = '../';
 } else {
   $root = './';
 }


/*if(
  $concept          ||
  $location         ||
  $design           ||
  $plan             ||
  $type             ||
  $quality          ||
  $brand            ||
	){
		$index = false;
  }else{
	  $index = true;
}*/


// create_path
$path_css = $root . 'css/';
$path_js  = $root . 'js/';
$path_img = $root . 'img/';
$path_lib = $root . 'lib/';


// external_link
$link_request = "https://";
$link_reserve = "https://";


// user_agent
// $user_agent = $_SERVER['HTTP_USER_AGENT'];
// if(preg_match('/iphone|ipod|ipad|android/ui', $user_agent) != 0){
//   $user_agent = "sp";
// }else{
//   $user_agent = "pc";
// }
//
// $browser = strtolower($_SERVER['HTTP_USER_AGENT']);
// if (strstr($browser, 'edge')) {
//   $browser = "edge";
// } elseif (strstr($browser, 'trident') || strstr($browser, 'msie')) {
//   $browser = "ie";
// } elseif (strstr($browser, 'chrome')) {
//   $browser = "chrome";
// } elseif (strstr($browser, 'firefox')) {
//   $browser = "firefox";
// } elseif (strstr($browser, 'safari')) {
//   $browser = "safari";
// } elseif (strstr($browser, 'opera')) {
//   $browser = "opera";
// } else {
//   $browser = "none";
// }


// echo_function
function h($s){
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
