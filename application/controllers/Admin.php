<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		if($this->session->userdata('status')=='Login'){
			
			$this->load->view('admin/index');
		}
		else
		{
			redirect('Login');
		}
	}

	public function Daftar_Gerai()
	{
		$where = array('hak_akses' => '0');
		$data=$this->Admin_model->tampilgerai('user_abdiel',$where);
		$data=array('data'=>$data);
		$this->load->view('admin/Daftar_Gerai',$data);
	}

	public function prosestambahgerai()
	{
		if ($this->input->post('Pass') == $this->input->post('Pass1'))
		{
			$this->Admin_model->savegerai();
			redirect('admin/Daftar_Gerai');
		}
		else
		{
			$this->load->view('admin/Tambah_Gerai');
		}
	}

	public function Tambah_Gerai()
	{
		$this->load->view('admin/Tambah_Gerai');
	}

	public function Tambah_Produk()
	{
		$this->load->view('admin/Tambah_Produk');
	}

	public function prosestambahproduk()
	{
		$data=array();
		if($this->input->post('submit')) // Jika user menekan tombol Submit (Simpan) pada form
			{ 
			  // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			  $upload = $this->Admin_model->upload();
			  
			  	if($upload['result'] == "success") // Jika proses upload sukses
			  	{ 
					 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
					$this->Admin_model->save($upload);
					$this->session->set_flashdata('success', 'Tambah Produk Berhasil');
					redirect(base_url('Admin'));	
				}
				else
				{
					$this->session->set_flashdata('error', 'Gagal Menambahkan');	
					redirect(base_url('Admin/Tambah_Produk'));	
				}

				
			  }
			//   else{ // Jika proses upload gagal
			// 	$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			//   }
		
	}

	public function Daftar_Produk()
	{
		$data=$this->Admin_model->tampilbarang();
		$data=array('data'=>$data);
		$this->load->view('admin/Daftar_Produk',$data);
	}

	public function hapusproduk($id)
	{
		$where = array('kd_brg' => $id);
		$data=$this->Admin_model->hapusproduk('barang_abdiel',$where);
		if($data){
			$this->session->set_flashdata('success', 'BERHASIL MENGHAPUS');
			redirect(base_url('Admin/Daftar_Produk'));
		}
		else{
			$this->session->set_flashdata('error', 'GAGAL MENGHAPUS');
			redirect(base_url('Admin/Daftar_Produk'));
		}
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
?>
