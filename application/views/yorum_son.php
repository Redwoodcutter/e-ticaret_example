<?php 
		$this->load->view('_header');
              
?>
                      <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
 <?php } ?>

<?php 
		$this->load->view('_footer');
              
?>