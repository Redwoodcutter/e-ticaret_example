<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlar extends CI_Controller {
	
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
            $query=$this->db->query("SELECT * FROM yorumlar WHERE Durum='Yeni'");
            $data["durum"]=$query->result();
            
            $this->load->view("admin/yorumlar_listesi",$data);
	}
          public function liste($durum)
	{
            $query=$this->db->query("SELECT * FROM yorumlar WHERE Durum='$durum'");
            $data["durum"]=$query->result();
            
            $this->load->view("admin/yorumlar_listesi",$data);
		
		
	} public function yorum_detay($id){
             $query=$this->db->query("SELECT * FROM yorumlar WHERE Id=$id");
             $data["detay"]=$query->result();
             $data["id"]=$id;
             $this->load->view('admin/yorum_detay',$data);
        }
          public function guncelle($id)
	{
		$data=array(
                    'Durum'=>$this->input->post('Durum'),
                    'Aciklama'=>$this->input->post('Aciklama'),
         );
         
         $this->Database_Model->update_data("yorumlar",$data,$id);
         $this->session->set_flashdata("mesaj","Başariyla Güncellendi");
         redirect(base_url().'Admin/Yorumlar/liste/yeni');
		
	} 
         public function mesaj_liste($durum)
	{   
            $query=$this->db->query("SELECT * FROM mesaj WHERE Durum='$durum'");
            $data["durum"]=$query->result();
            
            $this->load->view("admin/mesaj_listesi",$data);
		
		
	}
        public function mesaj_detay($id){
             $query=$this->db->query("SELECT * FROM mesaj WHERE Id=$id");
             $data["detay"]=$query->result();
             $data["id"]=$id;
             $this->load->view('admin/mesaj_detay',$data);
        }
        public function mesaj_ekle($id)
	{
		$data=array(
                    'C_mesaj'=>$this->input->post('C_mesaj'),
                    'Durum'=>$this->input->post('Durum'),
                    'C_ad_soy'=>$this->input->post('C_ad_soy')
         );
         $this->Database_Model->update_data("mesaj",$data,$id);
         $this->session->set_flashdata("mesaj","Başariyla Güncellendi");
         redirect(base_url().'Admin/Yorumlar');
	}
       
}

?>
