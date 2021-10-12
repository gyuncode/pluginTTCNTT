<?php
class Ttcntt_Backend
{
 private $__menuSlug = 'ttcntt_manager';
 private $__page     = '';
 public function __construct()
 {
  add_action('admin_menu', array($this, 'addAdminMenu'));
  if (isset($_GET['page'])) {
   $this->__page = $_GET['page'];
  }

 }
 public function addAdminMenu()
 {
  add_menu_page(
   'TTCNTT',
   'TTCNTT',
   'manage_options',
   $this->__menuSlug,
   array($this, 'showPluginOptions'),
   '',
   '2'
  );
  add_submenu_page(
   $this->__menuSlug,
   'Notification',
   'Thông báo',
   'manage_options',
   $this->__menuSlug . '-notifications',
   array($this, 'showPluginOptions')
  );
  add_submenu_page(
   $this->__menuSlug,
   'Add Notification',
   'Thêm thông báo',
   'manage_options',
   $this->__menuSlug . '-add-notifications',
   array($this, 'showPluginOptions')
  );
  add_submenu_page(
   $this->__menuSlug,
   'Courses',
   'Khoá học',
   'manage_options',
   $this->__menuSlug . '-courses',
   array($this, 'showPluginOptions')
  );
  add_submenu_page(
   $this->__menuSlug,
   'Courses',
   'Thêm khoá học',
   'manage_options',
   $this->__menuSlug . '-add-courses',
   array($this, 'showPluginOptions')
  );
  add_submenu_page(
   $this->__menuSlug,
   'Courses',
   'Học viên',
   'manage_options',
   $this->__menuSlug . '-member',
   array($this, 'showPluginOptions')
  );
  add_submenu_page(
   $this->__menuSlug,
   'Courses',
   'Thêm học viên',
   'manage_options',
   $this->__menuSlug . '-add-member',
   array($this, 'showPluginOptions')
  );
  add_submenu_page(
   $this->__menuSlug,
   'Courses',
   'Thống kê',
   'manage_options',
   $this->__menuSlug . '-statistic',
   array($this, 'showPluginOptions')
  );
 }
 public function showPluginOptions()
 {
   global $tController;
   $page = $this->__page;
   if ($page == 'ttcntt_manager') {
     $obj = $tController -> getController('AdminTtcntt','/backend');
     $obj -> display(); 
  }
  if ($page == 'ttcntt_manager-notifications') {
    $obj = $tController -> getController('AdminNotification','/backend');
    $obj -> display();
  }
  if ($page == 'ttcntt_manager-courses') {
    $obj = $tController -> getController('AdminCourses','/backend');
    $obj -> display();
  }
  if ($page == 'ttcntt_manager-member') {
    $obj = $tController -> getController('AdminMember','/backend');
    $obj -> display();
  }
  if ($page == 'ttcntt_manager-statistic') {
    $obj = $tController -> getController('AdminStatistic','/backend');
    $obj -> display();
  }
  if($page =='ttcntt_manager-add-notifications'){
    $obj =$tController ->getController('AdminAddNotification','/backend');
    $obj -> display();
  }
  if($page =='ttcntt_manager-add-courses'){
    $obj =$tController ->getController('AdminAddCourses','/backend');
    $obj -> display();
  }
  if($page =='ttcntt_manager-add-member'){
    $obj =$tController ->getController('AdminAddMember','/backend');
    $obj -> display();
  }
 }
}
