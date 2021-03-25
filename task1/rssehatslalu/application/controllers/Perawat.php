<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {

	public function index()
	{
		$this->load->view('template/index.php');
    }
    
    public function tabel_berobat()
	{
		$this->load->view('template/v_tabelberobat.php');
    }
    public function form_berobat()
	{
		$this->load->view('template/v_formberobat.php');
	}
	public function profil()
	{
		$this->load->view('template/v_profil.php');
	}
	public function login()
	{
		$this->load->view('template/v_login.php');
    }
}
