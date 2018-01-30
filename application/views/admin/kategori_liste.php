<div id="page-wrapper">
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">kategori Listesi</h1>
                        
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
               
                            <div class="table-responsive">
                                
                                <div class="panel-body">
                                    <a href="<?=base_url()?>Admin/Home/kategori_ekle" type="button" class="btn btn-primary"><p class="fa fa-fw"></p>kategori Ekle</a>
                                </div>
                             
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>adi</th>
                                            <th>description</th>
                                            <th>Keywords</th>
                                            <th>durum</th>
                                            <th>Tarih</th>
                                            <th>DUZENLE</th>
                                            <th>SIL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php                                      
                                        
                                        foreach($veri as $rs)
                                        { ?>
                                        
                                             <tr>
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->Adi?></td>
                                            <td><?=$rs->Description?></td>
                                            <td><?=$rs->Keywords?></td>
                                            <td><?=$rs->Durum?></td>
                                            <td><?=$rs->Tarih?></td>
                                            <td><a href="<?=base_url()?>Admin/Home/kategori_duzenle/<?=$rs->Id?>" class='btn btn-warning'>Duzenle</a></td>
                                            <td><a href="<?=base_url()?>Admin/Home/kategori_sil/<?=$rs->Id?>" onclick="return confirm ('Silmek İçin Emin Misin?')" class='btn btn-danger'>Sil</a></td>
                                            </tr>
                                      <?php } ?> 
                                         
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!--/.table-responsive -->
                        </div>
                        
                    </div>
                    <!--/.col-lg-12 -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container-fluid -->
        </div>