<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Download extends CI_Controller {

 function __construct(){
   parent::__construct();
   $this->load->helper(array('url','download')); 
 }

  public function index(){ 
    $this->load->view('menu1');
  }

  public function get_download(){ 
    force_download('assets/pdf/Bahasa_Pemrograman_Dasar.pdf',NULL);
  }
}