    <?php 
                    $this->load->view('admin/_header');
                    $this->load->view('admin/_sidebar'); 
    ?>
    <div id="page-wrapper">
                <div class="container-fluid">
               <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Yorum Detaylari</h1>
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


                                             <?php $rn=0; 
                                             $toplam=0;
                                             foreach ($detay as $rs){
                                                 $rn++;

                                               ?>
                                            <tr> 
                                                <td style="width: 10px;"><?=$rn?></td>
                                                <td><?=$rs->Tarih?></td>
                                                <td><?=$rs->Ad_soy?></td>
                                                <td><?=$rs->Durum?></td>
                                                <td><?=$rs->Mesaj?></td>
                                                <td><a href="<?=base_url() ?><?=$rs->Id?>" onclick="return confirm('Sipariş İptal Edilecek Emin Misin?')" class="btn btn-danger">İptal</a></td>
                                               </tr>

                                          <?php  }?>
                                        </tbody>
                                    </table>

                                    <hr>

                                </div>
                                <!--/.table-responsive --> 
                                 <div class="col-lg-6    ">
                                <form action="<?=base_url()?>Admin/Yorumlar/guncelle/<?=$detay[0]->Id?>" method="POST" >
                              <div class="form-group">
                                <label >İşlem</label>
                                <select class="form-control" name="Durum">
                                    <option><?=$detay[0]->Durum?></option>
                                    <option>Onaylandi</option>
                                    <option>Iptal</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label id="kategori">Açıklama</label>
                                <textarea  name="Aciklama" rows="5" cols="100" value="<?=$detay[0]->Aciklama?>"><?=$detay[0]->Aciklama?></textarea>

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

