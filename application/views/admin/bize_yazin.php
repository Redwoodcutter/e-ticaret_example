<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bize Yazın Listesi</h1>
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
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                           
                                            <th>id</th>
                                            <th>Ad Soyad</th>
                                            <th>E-mail</th>
                                            <th>Tel</th>
                                            <th>Ip</th>
                                            <th>Oku</th>
                                            <th>sil</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($mesajlar as $rs){ ?>
                                            <tr>
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->Ad_soy?></td>
                                             <td><?=$rs->Eposta?></td>
                                            <td><?=$rs->Tel?></td>
                                            <td><?=$rs->Ip?></td>
                                            <td><a href="<?=base_url()?>Admin/Home/bize_yazin_oku/<?=$rs->Id?>" class="btn btn-warning">Oku</a></td>
                                            <td><a href="<?=base_url()?>Admin/Home/bize_yazin_sil/<?=$rs->Id?>" onclick="return confirm('Üye Silinecek Emin Misin?')" class="btn btn-danger">sil</a></td>
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