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
require_once TTCNTT_INCLUDES_PATH . '/controller.php';
global $tController;
$tController = new tController();

if (is_admin()){
  require_once 'backend.php';
  new Ttcntt_Backend();
}
else{
  require_once 'fontend.php';
  new Ttcntt_Frontend();
}