<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
	
	public function __construct()
	{
				parent :: __construct();
                                $this->load->model('Database_Model');
				$this->load->helper('url');
                                if(!$this->session->userdata("admin_session")){   //login olup olmadıgı kontrolu..burada admin session a array ı atayıp kontrol yaptık..
                                redirect(base_url().'admin/login');
                                }
	}
	
	public function index()
	{
            //$query=$this->db->query("SELECT * FROM urunler ORDER BY id");
            //$data["veriler"]=$query->result();
            $data["veriler"]=$this->Database_Model->get_urunler();
            
            $this->load->view('admin\urunler_liste',$data);
		
		
	}
        public function ekle()
	{
            $this->load->view('admin\urunler_ekle');
		
		
	}
         public function ekle_kaydet()
	{
		$data=array(
                    'Ad'=>$this->input->post('Ad'),
                    'Kodu'=>$this->input->post('Kodu'),
                    'Turu'=>$this->input->post('Turu'),
                    'Kategori'=>$this->input->post('Kategori'),
                    'Stok'=>$this->input->post('Stok'),
                    'Tarih'=>$this->input->post('Tarih'),
                    'Resim'=>$this->input->post('Resim'),
                    'Description'=>$this->input->post('Description'),
                    'Keywords'=>$this->input->post('Keywords')
         );
         $this->db->insert("urunler",$data);
         $this->session->set_flashdata("mesaj","Üye Ekleme Başariyla Gerçekleştirildi..");
         redirect(base_url().'admin/urunler');
		
	}
        
          public function urunler_duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM urunler WHERE id=$id");
                $data["veri"]=$query->result();
		$this->load->view('admin\urunler_duzenle_form',$data);
		
	}
         public function guncelle($id)
	{
		$data=array(
                    'Ad'=>$this->input->post('Ad'),
                    'Kodu'=>$this->input->post('Kodu'),
                    'Turu'=>$this->input->post('Turu'),
                    'Kategori'=>$this->input->post('Kategori'),
                    'Stok'=>$this->input->post('Stok'),
                    'Tarih'=>$this->input->post('Tarih'),
                    'Resim'=>$this->input->post('Resim'),
                    'Description'=>$this->input->post('Description'),
                    'Keywords'=>$this->input->post('Keywords')
         );
         
         $this->Database_Model->update_data("urunler",$data,$id);
         
         $this->session->set_flashdata("mesaj","Başariyla Güncellendi");
         redirect(base_url().'admin\urunler');
		
	}
	public function urunler_sil($id)
	{
		$this->db->query("DELETE FROM urunler WHERE id=$id");
                redirect(base_url().'admin/urunler');
		
		
	}
         public function resim_yukle($id){
        
             $data["id"]=$id;
             $this->load->view('admin\urunler_resim_ekle',$data);
	}
         public function resim_kaydet($id){
               $data["id"]=$id;
                 
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))
                {
                        //uyarı mesajı ekle html kısmında.
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede Hata oluştu".$error);
                        $this->load->view('admin/urunler_resim_ekle',$data);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $data=array(
                          'Resim'=>$upload_data["file_name"]  
                        );
                        $this->load->model('Database_Model');
                        $this->Database_Model->update_data("urunler",$data,$id);
                        redirect(base_url().'admin/urunler');
                        
                }
        
            
	}
	 public function galeri_yukle($id)
         {       
          $query=$this->db->query("SELECT * FROM urun_galeri WHERE urun_id=$id"); 
          $data["veriler"]=$query->result();

          $data["id"]=$id;
          $this->load->view('admin/urun_galeri_ekle',$data);

         }
        public function galeri_kaydet($id)
         {   
          $data["id"]=$id;
          $config['upload_path']          = './upload/';
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 100;
                        $config['max_width']            = 1024;
                        $config['max_height']           = 1024;

                        $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload('resim'))
                        {
                                $error = $this->upload->display_errors();
                                $this->session->set_flashdata("mesaj","Resim  Yüklenemedi!!".$error);
                                $this->load->view('admin\urun_galeri_ekle',$data);
                                redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
                        }
                        else
                        {        
                               $upload_data= $this->upload->data();

                                $data=array (
                                    'urun_id' => $id, 
                                    'resim'=>$upload_data["file_name"]
                                );


                                $this->db->insert("urun_galeri",$data);
                                $this->session->set_flashdata("mesaj","Resim  Yüklendi");

                                  redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
                        }
                } 
         public function galeri_sil($id,$resimid)
                {
                   $this->db->query("DELETE FROM urun_galeri WHERE id=$resimid"); 

                    $this->session->set_flashdata("mesaj","Resim Galeriden Silindi");

                    redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
                }
        



}

?>
