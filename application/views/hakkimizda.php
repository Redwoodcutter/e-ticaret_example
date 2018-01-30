<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>

  <div class="col-lg-9">

        
      <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin-top: 25px;"><?=$sayfa?></h1>
                </div>
                <!--/.col-lg-12 -->
            </div>
      

         <?=$veri[0]->Hakkimizda?>
        </div>
        <!--/.col-lg-9 -->

      </div>
      <!--/.row -->

    </div>
    <!--/.container -->
    
    <br>
    <?php 
                $this->load->view('_footer'); 
    ?>
    