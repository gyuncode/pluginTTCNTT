<?php
/*
Plugin Name: TTCNTT 
Plugin URI:
Description: Test
Author: Test
Version: 1.0
Author URI:

*/

require_once 'define.php';
require_once TTCNTT_INCLUDES_PATH .'/controller.php';
global $controller;
$controller = new controller();
if(is_admin()){
  require_once 'backend.php';
  new TTCNTT_Backend();
}
else{
  require_once 'fontend.php';
  new TTCNTT_Fontend();
}