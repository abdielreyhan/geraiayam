<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerai extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('Gerai/index');
    }

    public function Lihat_Produk()
	{
		$this->load->view('Gerai/Lihat_Produk');
    }

    public function Tambah_Produk()
	{
		$this->load->view('Gerai/Tambah_Produk');
    }
    
    public function Pemesanan()
	{
		$this->load->view('Gerai/Pemesanan');
	}
}
