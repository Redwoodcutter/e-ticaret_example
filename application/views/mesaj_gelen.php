<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>

                   <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gelen Kutusu</h1>
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
                                            <th>Tarih</th>
                                            <th>Durum</th>
                                            <th>Mesaj</th>
                                            <th>Cevaplayan</th>
                                            <th>Mesaj</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    
                                         <?php  foreach ($uye as $rs){
                                           $rn=1;
                                           if($rs->Durum=='Cevaplandi'){?>
                                        <tr> 
                                            <td style="width: 10px;"><?=$rn?></td>
                                            <td><?=$rs->Tarih?></td>
                                            <td><?=$rs->Durum?></td>
                                            <td><?=$rs->Mesaj?></td>
                                            <td><?=$rs->C_ad_soy?></td>
                                            <td><?=$rs->C_mesaj?></td>
                                           </tr>
                                       
                                           <?php $rn++; }}?>
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
                    <!--/.panel -->
                </div>
                         </div>
                    <!--/.panel -->
                </div>
                  </div>
                    <!--/.panel -->
             
                        
                    
<?php 
		
                $this->load->view('_footer'); 
?>

