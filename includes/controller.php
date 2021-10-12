<?php
class tController {
    public function __construct($options = array()) {

    }
    public function getController($filename='',$dir='') {
        $obj = new stdClass();
        $file = TTCNTT_CONTROLLERS_PATH . $dir . DS . $filename . '.php';
        if(file_exists($file))
        {
            require_once $file;
            $controllerName = TTCNTT_PREFIX . $filename . '_Controller';
            $obj = new $controllerName ();
        }
        return $obj;
    }
    public function getModel() {

    }
    public function getHelper() {

    }
    public function getView() {

    }
    public function getValidate() {

    }
    public function getCssURL() {

    }
    public function getJsURL() {

    }
    public function getImgURL() {

    }
}
