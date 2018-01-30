<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {
	
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
            $query=$this->db->query("SELECT * FROM siparis WHERE Siparis_durumu='Yeni'");
            $data["durum"]=$query->result();
            
            $this->load->view("admin/siparis_listesi",$data);
		
		
	}
          public function liste($durum)
	{
            $query=$this->db->query("SELECT * FROM siparis WHERE Siparis_durumu='$durum'");
            $data["durum"]=$query->result();
            
            $this->load->view("admin/siparis_listesi",$data);
		
		
	} public function siparis_detay($siparis_id){
             $query=$this->db->query("SELECT * FROM siparis_urunler WHERE Siparis_id=$siparis_id");
             $data["siparis"]=$query->result();
             $query=$this->db->query("SELECT * FROM siparis WHERE Id=$siparis_id");
             $data["veri"]=$query->result();
             $data["siparisid"]=$siparis_id;
             
             
             $this->load->view('admin/siparis_detay',$data);
        }
          public function guncelle($id)
	{
		$data=array(
                    'Kargo'=>$this->input->post('Kargo'),
                    'Siparis_durumu'=>$this->input->post('islem'),
                    'Aciklama'=>$this->input->post('Aciklama'),
         );
         
         $this->Database_Model->update_data("siparis",$data,$id);
         $this->session->set_flashdata("mesaj","Başariyla Güncellendi");
         redirect(base_url().'Admin/Siparisler/liste/yeni');
		
	}
}

?>
