<?php 
		$this->load->view('admin/_header');
                $this->load->view('admin/_sidebar'); 
?>
<div id="page-wrapper">
            <div class="container-fluid">
           <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Mesaj Detaylari</h1>
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
                                            <th>Mesaj Durum</th>
                                            <th>Uye Ad soyad</th>
                                            <th>Uye Tel</th>
                                            <th>C_mesaj</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    
                                         <?php $rn=0; 
                                         $toplam=0;
                                         foreach ($detay as $rs){
                                             $rn++;
                                           ?>
                                        <tr> 
                                            <td style="width: 10px;"><?=$rn?></td>
                                            <td><?=$rs->Tarih?></td>
                                            <td><?=$rs->Durum?></td>
                                            <td><?=$rs->Ad_soy?></td>
                                            <td><?=$rs->U_Tel?></td
                                            <td></td>
                                            <td><?=$rs->Ip?></td>
                                            <td><?=$rs->C_mesaj?></td>
                                            <td><?=$rs->C_ad_soy?></td>
                                           
                                           </tr>
                                       
                                      <?php  }?>
                                    </tbody>
                                </table>
                                <hr>
                                
                            </div>
                            <!--/.table-responsive --> 
                             <div class="col-lg-6    ">
                            <form action="<?=base_url()?>Admin/Yorumlar/mesaj_ekle/<?=$detay[0]->Id?>" method="POST" >
                                 
                            <div class="form-group">
                            <label>Cevaplayan Ad soy</label>
                            <input type="text" class="form-control" id="email"required name="C_ad_soy" >
                          </div>
                          <div class="form-group">
                            <label >İşlem</label>
                            <select class="form-control" name="Durum">
                                <option></option>
                                <option>Cevaplandi</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label id="kategori">Cevap</label>
                            <textarea  name="C_mesaj" rows="5" cols="100" value=""></textarea>
            
                          </div>
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                        </form>
                        </div> 
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
 
<?php 
		
                $this->load->view('admin/_footer'); 
?>

