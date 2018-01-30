<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

	public function __construct()
	{
				parent :: __construct();   
                                $this->load->model('Database_Model');
				$this->load->helper('url');
                                if(!$this->session->userdata("uye_session"))
                                    redirect(base_url().'Home/login_ol');
	}
      
        public function login_cik(){
                     $this->session->unset_userdata("uye_session");
                     redirect(base_url().'Home');      
                  
        }
         public function hesabim(){
                $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet ");
                $data["sepet"]=$query->result();
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$ayarlar->result();
                $query=$this->db->query("SELECT * FROM users WHERE Id=".$this->session->uye_session["id"]);
                $data["uye"]=$query->result();
              
                $data["sayfa"]="Hesabım";
                $data["menu"]="Hesabım";
                
                $this->load->view('hesabim',$data);
                  
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
         redirect(base_url().'Uye /hesabim');
		
	}
        
         public function sepete_ekle()
	{
		$data=array(
                    'Urun_id'=>$this->input->post('urunid'),
                    'Adet'=>$this->input->post('miktar'),
                    'Musteri_id'=>$this->session->uye_session["id"],
                    
         );
         $this->db->insert("sepet",$data);
         $this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi </p>");
         redirect(base_url().'Home/urundetay/'.$this->input->post('urunid'));
		
	}
        public function sepetim(){
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result(); 
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $data["sayfa"]="Sepetim";
             $data["menu"]="sepetim";
             
             $id=$this->session->uye_session["id"];
             $data["veriler"]=$this->Database_Model->sepet_urunler($id);
             $this->load->view('sepet',$data);
        }  
        public function sepet_sil($id){
          $this->db->query("DELETE FROM sepet WHERE id=$id");
          redirect(base_url().'Uye/Sepetim');
        }  
        
        public function satin_al(){
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $data["sayfa"]="Satin Alma ||";
             $data["menu"]="Uye";
             
             $data["toplam"]=  $this->input->post('toplam');
             $id=  $this->session->uye_session["id"];
             
             $query=  $this->db->query("SELECT * FROM users WHERE Id=$id");
             $data["uye"]=$query->result();
            
             $this->load->view('satin_alma',$data);
        }
           public function siparis_tamamla(){
               
              //kredi karti bilgilerini al
              //bankaya gönder olumlu dönüş gelirse aşşagidaki işlemlere devam et. onay geldikten sonra form verileri alınacak
             
               $data=array(
                    'ad_soy'=>$this->input->post('adsoy'),
                    'Musteri_id'=>$this->session->uye_session["id"],
                    'Adres'=>$this->input->post('adres'),
                    'Sehir'=>$this->input->post('sehir'),
                    'Tel'=>$this->input->post('tel'),
                    'Tutar'=>$this->input->post('toplam'),
                   'Siparis_durumu'=>$this->input->post('Siparis_durumu'),
                    'IP'=>$_SERVER['REMOTE_ADDR']
         );
             
             $this->db->insert('siparis',$data);
             $siparis_id=  $this->db->insert_id();//girilen kaydın idsi.
             
             $id=$this->session->uye_session["id"];
             
             $veriler=  $this->Database_Model->sepet_urunler($id);
             foreach ($veriler as $rs){
                    $data=array(
                    'Adi'=>$rs->urunadi,
                    'Fiyat'=>$rs->satfiyat,
                    'Musteri_id'=>$id,
                    'Urun_id'=>$rs->Urun_id,
                    'Siparis_id'=>$siparis_id,
                    'Adet'=>$rs->Adet,
                    'Tutar'=>$rs->Adet * $rs->satfiyat
                            //eklenen ürünler stoktan düşülmeli.gerçek projede olması gerekir.
                    );
                    $this->db->insert("siparis_urunler",$data);
             }
             $this->db->query("DELETE FROM sepet WHERE Musteri_id=$id");
            
             redirect(base_url().'Uye/islem_son');
        }
        public function islem_son(){
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $data["sayfa"]="İşlem Tamamlandı ||";
             $data["menu"]="satinalma";
             $this->session->set_flashdata("mesaj","İşlem başariyla gerçekleşti,<br> siparişiniz onaylandıktan sonra adresinize yollanacaktir");
             $this->load->view('islem_son',$data);
        }
        public function siparisler(){
            $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
                $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
              $data["sayfa"]="Siparislerim ||";
             $data["menu"]="uye";
             $query=$this->db->query("SELECT * FROM siparis WHERE Musteri_id=".$this->session->uye_session["id"]);
             $data["veriler"]=$query->result();
             
             $this->load->view('siparislerim',$data);
        }
         public function siparis_detay($siparis_id){
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $data["sayfa"]="Sipariş detay ||";
             $data["menu"]="uye";
             $query=$this->db->query("SELECT * FROM siparis_urunler WHERE Siparis_id=$siparis_id");
             $data["veriler"]=$query->result();
             
             $this->load->view('siparis_detay',$data);
        }
        public function siparis_iptal($id){
          $this->db->query("DELETE FROM siparis_urunler WHERE id=$id");
          redirect(base_url().'Uye/siparisler');
        }   
    
          public function mesaj_gonder()
	{  
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->uye_session["id"]);
             $data["uye"]=$query->result();
             
             $data["sayfa"]="Mesaj Gonder ||";
             $data["menu"]="Uye";
             
             $this->session->set_flashdata("mesaj","İşlem başariyla gerçekleşti,<br> Teşekkürler");
             $this->load->view('mesaj_gonder',$data);
               
	} 
        public function mesaj_ekle()
	{
		$data=array(
                    'Uye_Id'=>$this->session->uye_session["id"],
                    'Mesaj'=>$this->input->post('mesaj'),
                    'Durum'=>$this->input->post('durum'),
                    'Ad_soy'=>$this->input->post('ad_soy'),
                    'U_email'=>$this->input->post('email'),  
                    'U_Tel'=>$this->input->post('Tel')
         );
         $this->db->insert("mesaj",$data);
         $this->session->set_flashdata("mesaj","İşlem başariyla gerçekleşti,<br> en kısa zamanda cevap verilecektir");
         redirect(base_url().'Home');
	}
         public function mesaj_liste()
	{
             $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
             $data["sepet"]=$query->result();  
             $ayarlar=$this->db->query("SELECT * FROM ayarlar");
             $data["veri"]=$ayarlar->result();
             $query=$this->db->query("SELECT * FROM mesaj WHERE Uye_id=".$this->session->uye_session["id"]);
             $data["uye"]=$query->result();
             
             $data["sayfa"]="Gelen Kutusu ||";
             $data["menu"]="Uye";
             
             $this->load->view('mesaj_gelen',$data);
        
        }
       
      
}