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
      add_submenu_page( 
        $this->_menuSlug,  
        'Courses', 
        'Khoá học', 
        'manage_options', 
        $this->_menuSlug . 'Courses',  
        array($this,'show_plugin_options')
      );
      add_submenu_page( 
        $this->_menuSlug,  
        'Courses', 
        'Thêm khoá học', 
        'manage_options', 
        $this->_menuSlug . 'Add Courses',  
        array($this,'show_plugin_options')
      );
      add_submenu_page( 
        $this->_menuSlug,  
        'Courses', 
        'Học viên', 
        'manage_options', 
        $this->_menuSlug . 'Member',  
        array($this,'show_plugin_options')
      );
      add_submenu_page( 
        $this->_menuSlug,  
        'Courses', 
        'Thêm học viên', 
        'manage_options', 
        $this->_menuSlug . 'Add Member',  
        array($this,'show_plugin_options')
      );
      add_submenu_page( 
        $this->_menuSlug,  
        'Courses', 
        'Thống kê', 
        'manage_options', 
        $this->_menuSlug . 'Statistic',  
        array($this,'show_plugin_options')
      );
  }
  public function show_plugin_options()
  {
  }
}