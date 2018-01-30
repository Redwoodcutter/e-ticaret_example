<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>
   <div class="col-lg-9">
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ürünler Listesi</h1>
                        <div class="panel-body">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
                        </div>
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!--/.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nr</th>
                                            <th>Adı</th>
                                            <th>Adet</th>
                                            <th>Tutar</th>
                                            <th>Fiyat</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    
                                         <?php  
                                         $toplam=0;
                                         foreach ($veriler as $rs){
                                           $rn=1;  
                                           $toplam+=$rs->Tutar;
                                           ?>
                                        <tr> 
                                            <td style="width: 10px;"><?=$rn?></td>
                                            <td><?=$rs->Adi?></td>
                                            <td><?=$rs->Adet?></td>
                                            <td><?=$rs->Tutar?></td>
                                            <td><?=$rs->Fiyat?></td>
                                            <td><a href="<?=base_url() ?>Uye/siparis_iptal/<?=$rs->Id?>" onclick="return confirm('Sipariş İptal Edilecek Emin Misin?')" class="btn btn-danger">İptal</a></td>
                                           </tr>
                                       
                                      <?php $rn++; }?>
                                    </tbody>
                                </table>
                                Siparis Toplam : <?=$toplam?> TL
                             
                                <hr>
                                
                            </div>
                            <!--/.table-responsive -->
                        </div>
                        <!--/.panel-body -->
                    </div>
                    <!--/.panel -->
                </div>
                        
                    </div>
                    <!--/.col-lg-12 -->
                </div>
                <!--/.row -->
            </div>

</div>
</div>
<?php 
		
                $this->load->view('_footer'); 
?>

