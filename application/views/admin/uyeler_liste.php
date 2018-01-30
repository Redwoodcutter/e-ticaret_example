<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Üye Listesi</h1>
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
                        <div class="panel-heading">
                            <a href="<?=base_url()?>Admin/Uyeler/ekle" type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i>Uye Ekle</a>
                        </div>
                        <!--/.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                           
                                            <th>id</th>
                                            <th>Ad Soyad</th>
                                            <th>e-mail</th>
                                            <th>yetki</th>
                                            <th>durum</th>
                                            <th>düzenle</th>
                                            <th>sil</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($veriler as $rs){ ?>
                                            <tr>
                                            <td><?=$rs->id?></td>
                                            <td><?=$rs->ad_soy?></td>
                                             <td><?=$rs->email?></td>
                                            <td><?=$rs->yetki?></td>
                                            <td><?=$rs->durum?></td>
                                            <td><a href="<?=base_url() ?>Admin/Uyeler/uye_duzenle/<?=$rs->id?>"  class="btn btn-warning">düzenle</a></td>
                                            <td><a href="<?=base_url() ?>Admin/Uyeler/uye_sil/<?=$rs->id?>" onclick="return confirm('Üye Silinecek Emin Misin?')" class="btn btn-danger" >sil</a></td>
                                        </tr>
                                       
                                      <?php }?>
                                    </tbody>
                                </table>
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
    <?php
$this->load->view('admin/_footer');
?>