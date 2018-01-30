<?php 
		$this->load->view('admin/_header');
                $this->load->view('admin/_sidebar'); 
?>
 <div id="page-wrapper">
            <div class="container-fluid">
                   <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sipariş Listesi</h1>
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
                                            <th>Ad_Soy</th>
                                            <th>Tel</th>
                                            <th>Adres</th>
                                            <th>Sehir</th>
                                            <th>Tutar</th>
                                            <th>Durumu</th>
                                            <th>Detay</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    
                                         <?php  foreach ($durum as $rs){
                                           $rn=1;  ?>
                                        <tr> 
                                            <td style="width: 10px;"><?=$rn?></td>
                                            <td><?=$rs->Ad_Soy?></td>
                                            <td><?=$rs->Tel?></td>
                                            <td><?=$rs->Adres?></td>
                                            <td><?=$rs->Sehir?></td>
                                            <td><?=$rs->Tutar?></td>
                                            <td><?=$rs->Siparis_durumu?></td>
                                            <td><?=$rs->Tarih?></td>
                                            
                                            <td><a href="<?=base_url() ?>Admin/Siparisler/siparis_detay/<?=$rs->Id?>" class="btn btn-success">Detay</a></td>
                                
                                           </tr>
                                       
                                      <?php $rn++; }?>
                                    </tbody>
                                </table>
                             
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
            <!--/.container-fluid -->
        </div>
 </div>
<?php 
		
                $this->load->view('admin/_footer'); 
?>

