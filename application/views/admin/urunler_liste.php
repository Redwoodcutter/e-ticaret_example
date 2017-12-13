<?php
$this->load->view('admin\_header');
$this->load->view('admin\_sidebar');
?>

<div id="page-wrapper">
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
                        <div class="panel-heading">
                            <a href="<?=base_url()?>admin/urunler/ekle" type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i> Urun Ekle</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                           
                                            <th>id</th>
                                            <th>Ad</th>
                                            <th>Kodu</th>
                                            <th>Turu</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Tarih</th>
                                            <th>Resim</th>
                                            <th>Galeri</th>
                                            <th>Description</th>
                                            <th>Keyword</th>
                                            <th>düzenle</th>
                                            <th>sil</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($veriler as $rs){ ?>
                                            <tr>
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->Ad?></td>
                                            <td><?=$rs->Kodu?></td>
                                            <td><?=$rs->Turu?></td>
                                            <td><?=$rs->Katadi?></td>
                                            <td><?=$rs->Stok?></td>
                                            <td><?=$rs->Tarih?></td>
                                            <td>
                                                <?php if($rs->Resim) { ?>
                                                <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>"> <img src="<?=base_url()?>upload/<?=$rs->Resim?>" height="30"></a>
                                                <?php }else { ?>
                                                 <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" class="btn btn-success">Resim Ekle</a>
                                                <?php } ?>
                                            </td>
                                           <td><a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>" class="btn btn-warning">Galeri Ekle </a></td>
                                            <td><?=$rs->Description?></td>
                                            <td><?=$rs->Keywords?></td>
                                            <td><a href="<?=base_url() ?>admin/urunler/urunler_duzenle/<?=$rs->Id?>" class="btn btn-warning" >düzenle</a></td>
                                            <td><a href="<?=base_url() ?>admin/urunler/urunler_sil/<?=$rs->Id?>" onclick="return confirm('Üye Silinecek Emin Misin?')" class="btn btn-danger">sil</a></td>
                                        </tr>
                                       
                                      <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <?php
$this->load->view('admin\_footer');
?>