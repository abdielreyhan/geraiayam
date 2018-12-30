<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Admin_model extends CI_Model
{

    public function upload()
    {
          $config['upload_path']   = './asset/produk/';
          $config['allowed_types'] = 'jpg|png|jpeg';
          $config['max_size']      = '2048';
          $config['max_width']     = 300;
          $config['max_height']    = 300;
          $config['remove_space'] = TRUE;
          $config['encrypt_name'] = TRUE;

        
          $this->load->library('upload', $config); // Load konfigurasi uploadnya
          if($this->upload->do_upload('input_gambar')) // Lakukan upload dan Cek jika proses upload berhasil
          { 
              $upload_data=$this->upload->data();
              $filename=$upload_data['file_name'];
              $sourche='./asset/produk/'.$filename;

               //Load codeigniter FTP class
               $this->load->library('ftp');
                
               //FTP configuration
               $ftp_config['hostname'] = 'dinusheroes.xyz'; 
               $ftp_config['username'] = 'dinusheroes';
               $ftp_config['password'] = 'OrderHarits123';
               $ftp_config['debug']    = TRUE;
            
              
             //Connect to the remote server
             $this->ftp->connect($ftp_config);
                
             //File upload path of remote server
             //$destination = 'Assets/'.$filename;
              //Upload file to the remote server
              $this->ftp->upload($sourche, '/public_html/Ayamku/asset/produk/'.$filename);
                
              //Close FTP connection
              $this->ftp->close();
              
              //Delete file from local server
              @unlink($sourche);
              // Jika berhasil :
              $return = array('result' => 'success', 'file' => $this->upload->data(), 'link' => 'http://dinusheroes.xyz/Ayamku/asset/produk');
              return $return;
          }
          else
          {
              // Jika gagal :
              $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
              return $return;
          }
    }

    public function save($upload)
    {
        $link=$upload['link']."/".$upload['file']['file_name'];
        $data = array(
        'kd_brg' => $this->input->post('kdbrg'),
        'nm_brg' => $this->input->post('Namaproduk'),
        'satuan' => $this->input->post('satuan'),
        'deskripsi' => $this->input->post('deskripsi'),
        'harga' => $this->input->post('harga'),
        'stok' => $this->input->post('stock'),
        'stok_min' => $this->input->post('stock_min'),
        'image' => $link
        );
        
        $this->db->insert('barang_abdiel', $data);
    }

    public function savegerai()
    {
        $data = array(
            'username' => $this->input->post('NamaGerai'),
            'email' => $this->input->post('email'),
            'password' =>md5( $this->input->post('Pass')),
            'no_tlp' => $this->input->post('tlp'),
            'lokasi' => $this->input->post('lokasi'),
            'hak_akses' => '0'
            );
            
            $this->db->insert('user_abdiel', $data);
    }

    public function tampilbarang()
    {
        $this->db->select('*');
        $this->db->from('barang_abdiel');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampilgerai($table,$where)
    {
        $query = $this->db->get_where($table,$where);
        return $query->result_array();
    }

    public function hapusproduk($table,$id)
    {

         $this->db->where($id);
        $res=$this->db->delete($table);
        return $res;
    }
}