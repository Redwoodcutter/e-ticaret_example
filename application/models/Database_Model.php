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
                        $query=$this->db->query('SELECT urunler.*, kategoriler.adi as Katadi
                        FROM urunler 
                        INNER JOIN kategoriler ON urunler.kategori=kategoriler.id
                        order by Id');
                        
                        return $query->result();
            }
}

?>