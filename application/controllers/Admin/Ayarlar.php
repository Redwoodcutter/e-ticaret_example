<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {
	
	public function __construct()
	{
				parent :: __construct();
                                $this->load->model('Database_Model');
								$this->load->helper('url');
                                if(!$this->session->userdata("admin_session"))
                                    redirect(base_url().'Admin/login');
	}
	
	public function index()
	{
            $query=$this->db->query("SELECT * FROM ayarlar");
            $data["veri"]=$query->result();
            
            $this->load->view('admin/ayarlar',$data);
		
	
		
	}
        public function guncelle($id){  
                
            
            $data=array(
		'Ad'=>$this->input->post('adi'),
                'Keywords'=>$this->input->post('keywords'),
                'Description'=>$this->input->post('description'),
                'Email'=>$this->input->post('email'),    
                'Adres'=>$this->input->post('adres'),
                'Tel'=>$this->input->post('telefon'),
                'Sehir'=>$this->input->post('sehir'),                     
                'smtpserver'=>$this->input->post('smtpserver'),          
                'smtpemail'=>$this->input->post('smtpemail'), 
                'smtpport'=>$this->input->post('port'),  
                'Password'=>$this->input->post('sifre'),  
                'Facebook'=>$this->input->post('facebook'),
                'Twitter'=>$this->input->post('twitter'),  
                'Hakkimizda'=>$this->input->post('hakkimizda'),
                'Iletisim'=>$this->input->post('iletisim')
                ) ; 
               $this->Database_Model->update_data("ayarlar",$data,$id);
               $this->session->set_flashdata("mesaj","Üye Ekleme Başariyla Gerçekleştirildi..");     
               redirect(base_url().'Admin/ayarlar');
               
	}
	
}

?>
