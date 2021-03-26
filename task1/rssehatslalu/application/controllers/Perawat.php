<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {

	public function index()
	{
		$this->load->view('template/index.php');
    }
    
    public function tambah_tensi()
	{
		$this->load->view('perawat/Tensi.php');
    }
	
    public function form_berobat()
	{
		$this->load->view('template/v_formberobat.php');
	}
}
