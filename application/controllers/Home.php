<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
				parent :: __construct();   
                                    $this->load->model('Database_Model');
				$this->load->helper('url');
                               
	}
	
	public function index()
	{
                $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
                $data["sepet"]=$query->result();       
            
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
                $data["kategori"]=$query->result();
                
                
                
                $query=$this->db->query("SELECT * FROM urunler WHERE Grubu='kampanya'");
                $data["kampanya"]=$query->result();
                $query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 5");
                $data["random"]=$query->result();
                $query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 4");
                $data["yeni"]=$query->result();
                
                
                $query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 6");
                $data["yeni_urun"]=$query->result();
                $query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 6");
                $data["random_urun"]=$query->result();
                $query=$this->db->query("SELECT * FROM urunler WHERE Grubu='kampanya' LIMIT 6");
                $data["kampanya_urun"]=$query->result();
                
                
                
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $data["sayfa"]="";
                $data["menu"]="anasayfa";
                
		$this->load->view('_header',$data);
                $this->load->view('_sidebar',$data);
                $this->load->view('_content');
                $this->load->view('_footer');
	}
        public function hakkimizda()
	{       $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
                $data["sepet"]=$query->result();  
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
                $data["kategori"]=$query->result();
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $data["sayfa"]="Hakkımızda";
                $data["menu"]="hakkimizda";
                
                $this->load->view('hakkimizda',$data);
	}
         public function kategoriler()
	{       $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
                $data["sepet"]=$query->result();  
                $query=$this->db->query("SELECT * FROM kategoriler  WHERE Parent_Id='0'");
                $data["kategori"]=$query->result();
                
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $data["sayfa"]="Kategoriler";
                $data["menu"]="kategoriler";
                
                $this->load->view('kategoriler',$data);
	}
        public function kategori_detay($id){
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
            $query=$this->db->query("SELECT * FROM kategoriler WHERE  Parent_Id='0'");
            $data["kategori"]=$query->result();
            $query=$this->db->query("SELECT * FROM kategoriler WHERE  Id='$id'");
            $data["kategori1"]=$query->result();
            $query=$this->db->query("SELECT * FROM ayarlar");
            $data["veri"]=$query->result();
            $data["sayfa"]="Kategori Detay ||      ";
            $data["menu"]="Kategori_Detay";
            $query=$this->db->query("SELECT * FROM urunler WHERE kategori='$id'");
            $data["veri2"]=$query->result();
             
            
         
           
            $this->load->view('kategori_detay',$data);
        }
         public function bize_yazin()
	{       $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
                $data["sepet"]=$query->result();  
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
                $data["kategori"]=$query->result();
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $data["sayfa"]="Bize Yazin";
                $data["menu"]="bize_yazin";
                
                $this->load->view('bize_yazin',$data);
                
	}
         public function iletisim()
	{       $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
                $data["sepet"]=$query->result();  
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
                $data["kategori"]=$query->result();
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $data["sayfa"]="İletişim";
                $data["menu"]="iletisim";
               
                $this->load->view('iletisim',$data); 
	}
          public function mesaj_gonder()
	{
		$data=array(
                    'Ad_soy'=>$this->input->post('Ad_Soy'),
                    'Eposta'=>$this->input->post('Eposta'),
                    'Tel'=>$this->input->post('Tel'),
                    'Mesaj'=>$this->input->post('Mesaj'),
                    'Ip'=>$_SERVER['REMOTE_ADDR']

                    
         );
         $this->db->insert("mesajlar",$data);
         
         
         $this->session->set_flashdata("mesaj","Mesajınız Başariyla gönderildi");
         redirect(base_url().'Home/bize_yazin');
         
		
	}
        public function login()
	{	
		
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");
                
		$email=$this->security->xss_clean($email);
                $sifre=$this->security->xss_clean($sifre);
		$this->load->model('Database_Model');
		
		$result= $this->Database_Model->login("users",$email,$sifre);
		
		if($result)
		{
                    $sess_array = array(
                        
                        'id' => $result[0]->id,
                        'adsoy' => $result[0]->ad_soy,
                        'email' => $result[0]->email,
                        'resim' => $result[0]->Adres,
                        'resim' => $result[0]->Tel
                    );
                   
                    //session degiskenine atama
                     $this->session->set_userdata("uye_session",$sess_array);
                     redirect(base_url().'Home');  
                }
		
		else
		{
			$this->session->set_flashdata("mesaj","Yanlış kullanıcı adı ya da şifre");
			redirect(base_url().'Home/login_ol');
                        
		}
                
	}
         public function login_ol()
	{	
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
                $data["kategori"]=$query->result();
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $data["sayfa"]="login";
                $data["menu"]="login";
	        
                $this->load->view('login_ol',$data);
        }  
        public function urundetay($id){
            $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
            $data["sepet"]=$query->result();  
            $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
            $data["kategori"]=$query->result();
           
            $data["menu"]="urun";
            $data["sayfa"]=null;
            
            $data["veri"]=$this->Database_Model->get_urun($id);
            
            $query= $this->db->query("SELECT * FROM urun_galeri WHERE Urun_Id=$id ");
            $data["resimler"]=$query->result();
            
            $query= $this->db->query("SELECT * FROM yorumlar WHERE Urun_Id=$id ");
            $data["yorum"]=$query->result();
            if($this->session->userdata("uye_session")){
            $query= $this->db->query("SELECT * FROM users WHERE Id=".$this->session->uye_session["id"]);
            $data["uye"]=$query->result(); 
            }
          
            
            $this->load->view('urun_detay',$data);
        }
        public function uye_ekle()
	{        
            $query=$this->db->query("SELECT * FROM kategoriler WHERE Parent_Id='0'");
            $data["kategori"]=$query->result();
            $query=$this->db->query("SELECT * FROM ayarlar");
            $data["veri"]=$query->result();
            
            $data["sayfa"]="";
            $data["menu"]="anasayfa";
             
             
            $this->load->view('uye_kaydol',$data);
	} 
        public function uye_kaydet()
	{  
                $data=array(
		'ad_soy'=>$this->input->post('AdSoyad'),
                'email'=>$this->input->post('email'),
                'sifre'=>$this->input->post('sifre'),
                'durum'=>$this->input->post('yetki'),
                'Tel'=>$this->input->post('telefon')     
                ) ;     
                        
               $this->db->insert("users",$data);
               $this->session->set_flashdata("mesaj","Kaydiniz alınmıştır lütfen admin onayini bekleyin");
               redirect(base_url().'Home');        
               
               
	}
         public function yorum_gonder()
	{  
                $data=array(
		'Ad_soy'=>$this->input->post('Ad_soy'),
                'Uye_Id'=>$this->input->post('Uye_Id'),
                'Urun_Id'=>$this->input->post('Urun_Id'),
                'Mesaj'=>$this->input->post('Mesaj'),
                'Durum'=>$this->input->post('Durum')
                ) ;     
                        
               $this->db->insert("yorumlar",$data);
               $this->session->set_flashdata("mesaj","Kaydiniz alınmıştır lütfen admin onayini bekleyin");
               redirect(base_url().'Home/yorum_son');        
               
               
	}
          public function yorum_son()
	{  
                
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $data["sayfa"]="İşlem Tamamlandı ||";
             $data["menu"]="yorum_son";
             $this->session->set_flashdata("mesaj","İşlem başariyla gerçekleşti,<br> yorumunuz onaylandıktan sonra listelenecektir");
             $this->load->view('islem_son',$data);
             
               
               
	}
        
        
       
        
}