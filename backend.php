<?php
class TTCNTT_Backend{
  private $_menuSlug = 'ttcntt_manager';
  public function __construct(){ 
    add_action('admin_menu', array($this,'add_admin_menu'));
  }
 
  public function add_admin_menu()
  {
      add_menu_page (
              'TTCNTT', 
              'TTCNTT', 
              'manage_options', 
              $this->_menuSlug, 
              array($this,'show_plugin_options'), 
              '', 
              '2'
      );
  }
   
  public function show_plugin_options()
  {
      
  }
   
 
}