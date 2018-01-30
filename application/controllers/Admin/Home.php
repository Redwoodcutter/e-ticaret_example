<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
				parent :: __construct();
                                $this->load->model('Database_Model');
				$this->load->helper('url');
                                if(!$this->session->userdata("admin_session"))
                                    redirect(base_url().'Admin/Login');
	}
	
	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
		
	}
        public function bize_yazin()
	{   
          $query=$this->db->query("SELECT * FROM mesajlar"); 
          $data["mesajlar"]=$query->result();
          $this->load->view('admin/bize_yazin',$data);
	}
         public function bize_yazin_oku($id)
	{   
          $query=$this->db->query("SELECT * FROM mesajlar WHERE Id=$id"); 
          $data["veri"]=$query->result();
          $this->load->view('admin/bize_yazin_oku',$data);
	}
       public function bize_yazin_sil($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE Id=$id");
                redirect(base_url().'Admin/Home/bize_yazin');
		
		
	}
          public function siparisler($durum)
	{
            $query=$this->db->query("SELECT * FROM siparis WHERE Siparis_durumu='$durum'");
            $data["yeni"]=$query->result();
            
            $this->load->view("admin/siparis_listesi",$data);
		
		
	} public function siparis_detay($siparis_id){
             $query=$this->db->query("SELECT * FROM siparis_urunler WHERE Musteri_id='Yeni'");
             $data["yeni"]=$query->result();
             $query=$this->db->query("SELECT * FROM siparis_urunler WHERE Siparis_id=$siparis_id");
             $data["siparis"]=$query->result();
             
             
             $this->load->view('admin/siparis_detay',$data);
        }
       public function kategori()
	{       $query=$this->db->query("SELECT * FROM kategoriler");
                $data["veri"]=$query->result();   
                $this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_footer');  
                
                $this->load->view('admin/kategori_liste',$data);
	}
        public function kategori_ekle()
	{           
                $query=$this->db->query("SELECT * FROM kategoriler");
                $data["veriler"]=$query->result();
               
                
                
		$this->load->view('admin/kategori_ekle',$data);	
	}
         public function kategori_kaydet()
	{       
                
                $query=$this->db->query("SELECT * FROM kategoriler");
                
                $data=array(
		'adi'=>$this->input->post('kategoriadi'), 
                'description'=>$this->input->post('description'), 
                'keywords'=>$this->input->post('keywords'),   
                'durum'=>$this->input->post('durum'),
                'tarih'=>$this->input->post('tarih')
                     
                );     
                        
                $this->db->insert("kategoriler",$data);
                $this->session->set_flashdata("mesaj","Başarılı");
                redirect(base_url().'Admin/Home/kategori');        
     
	}
        public function kategori_duzenle($id)
	{  
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
                $data["veri"]=$query->result();
                
		$this->load->view('admin/kategori_duzenle_formu',$data);
	}
         public function kategori_guncelle($id)
	{ 
                $data=array(
		'adi'=>$this->input->post('adi'),
                'description'=>$this->input->post('description'),
                'keywords'=>$this->input->post('keywords'),
                'durum'=>$this->input->post('durum'),
                'tarih'=>$this->input->post('tarih')
                     
                ) ;     
               
               
               $this->Database_Model->update_data("kategoriler",$data,$id);
               $this->session->set_flashdata("mesaj"," Güncelleme Başarılı");
               redirect(base_url().'Admin/Home/kategori');        
               
               
	}
         public function kategori_sil($id)
	{  
		$this->db->query("DELETE  FROM kategoriler WHERE id=$id");
                 $this->session->set_flashdata("mesaj"," Silme Başarılı");
		redirect(base_url().'Admin/Home/kategori'); 
	}
}

?>
