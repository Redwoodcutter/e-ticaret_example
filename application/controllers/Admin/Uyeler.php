<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
	
	public function __construct()
	{
				parent :: __construct();
				$this->load->helper('url');
                                if(!$this->session->userdata("admin_session")){   //login olup olmadıgı kontrolu..burada admin session a array ı atayıp kontrol yaptık..
                                redirect(base_url().'Admin/Login');
                                }
	}
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM users ORDER BY id");
                $data["veriler"]=$query->result();
		$this->load->view('admin/uyeler_liste',$data);
		
		
	}
        public function ekle()
	{
            $this->load->view('admin/uye_ekle');
		
		
	}
         public function ekle_kaydet()
	{
		$data=array(
                    'ad_soy'=>$this->input->post('adsoy'),
                    'email'=>$this->input->post('email'),
                    'sifre'=>$this->input->post('sifre'),
                    'durum'=>$this->input->post('durum'),
                    'yetki'=>$this->input->post('yetki')
         );
         $this->db->insert("users",$data);
         $this->session->set_flashdata("mesaj","Üye Ekleme Başariyla Gerçekleştirildi..");
         redirect(base_url().'Admin/Uyeler');
		
	}
        
          public function uye_duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM users WHERE id=$id");
                $data["veri"]=$query->result();
		$this->load->view('admin/uye_duzenle_form',$data);
		
	}
         public function guncelle($id)
	{
		$data=array(
                    'ad_soy'=>$this->input->post('adsoy'),
                    'email'=>$this->input->post('email'),
                    'sifre'=>$this->input->post('sifre'),
                    'durum'=>$this->input->post('durum'),
                    'yetki'=>$this->input->post('yetki')
         );
         $this->load->model('Database_Model');
         $this->Database_Model->update_data("users",$data,$id);
         
         $this->session->set_flashdata("mesaj","Başariyla Güncellendi");
         redirect(base_url().'Admin/Uyeler');
		
	}
	public function uye_sil($id)
	{
		$this->db->query("DELETE FROM users WHERE id=$id");
                redirect(base_url().'Admin/Uyeler');
		
		
	}
	
}

?>
