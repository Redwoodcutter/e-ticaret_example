<?php


class Database_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		public function login($tablo,$email,$sifre)
		{
			$this->db->select("*");
			$this->db->from($tablo);
			$this->db->where('email',$email);
			$this->db->where('sifre',$sifre);
			$this->db->where('durum',"aktif");
			$this->db->limit(1);
			
			$query=$this->db->get();  // verileri getir
			
			if($query->num_rows()==1){
				return $query->result();
			}else{
				return false;
			}
			
			
		}
            public function update_data($tablo,$data,$id){
                $this->db->where('id',$id);
                $this->db->update($tablo,$data);
                return true;
            }
           function get_urunler(){
                        $query=$this->db->query('SELECT urunler.*, kategoriler.Adi as Katadi
                        FROM urunler 
                        INNER JOIN kategoriler ON urunler.Kategori=kategoriler.Id
                        order by Id');
                        
                        return $query->result();
            }
             function get_urun($id){
                        $query=$this->db->query('SELECT urunler.*, kategoriler.Adi as Katadi
                        FROM urunler 
                        INNER JOIN kategoriler ON urunler.Kategori=kategoriler.Id
                        WHERE urunler.Id='.$id);
                        
                        return $query->result();
            }
             function sepet_urunler($id){
                        $query=$this->db->query('SELECT sepet.*,urunler.Resim as urunresim, urunler.Ad as urunadi,fiyat as satfiyat
                        FROM sepet
                        LEFT JOIN urunler ON urunler.Id=sepet.Urun_id
                        WHERE sepet.Musteri_id='.$id);
                        
                        return $query->result();
            }
}

?>