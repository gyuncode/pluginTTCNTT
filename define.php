<?php

define('TTCNTT_PLUGIN_URL', plugin_dir_url( __FILE__ ));

define('TTCNTT_PUBLIC_URL', TTCNTT_PLUGIN_URL . 'public');
define('TTCNTT_CSS_URL', TTCNTT_PLUGIN_URL . '/css');
define('TTCNTT_JS_URL', TTCNTT_PLUGIN_URL . '/js');
define('TTCNTT_IMAGES_URL', TTCNTT_PLUGIN_URL . '/images');

define('DS' , DIRECTORY_SEPARATOR);

define('TTCNTT_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('TTCNTT_CONFIGS_PATH', TTCNTT_PLUGIN_PATH .'configs');
define('TTCNTT_CONTROLLERS_PATH', TTCNTT_PLUGIN_PATH .'controllers');
define('TTCNTT_HELPERS_PATH', TTCNTT_PLUGIN_PATH .'helpers');
define('TTCNTT_INCLUDES_PATH', TTCNTT_PLUGIN_PATH .'includes');
define('TTCNTT_MODELS_PATH', TTCNTT_PLUGIN_PATH .'models');
define('TTCNTT_PUBLIC_PATH', TTCNTT_PLUGIN_PATH .'public');
define('TTCNTT_VALIDATES_PATH', TTCNTT_PLUGIN_PATH .'validates');
define('TTCNTT_VIEW_PATH', TTCNTT_PLUGIN_PATH .'views');