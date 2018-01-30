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
                                            <th>Resim</th>
                                            <th>Adı</th>
                                            <th>Fiyat</th>
                                            <th>Miktar</th>
                                            <th>Tutar</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                        $rn=0;
                                        $toplam=0;
                                        foreach ($veriler as $rs){ 
                                        $rn++;
                                        $tutar=$rs->satfiyat*$rs->Adet;
                                        $toplam+=$tutar;
                                        ?>
                                            
                                        <tr>
                                            <td style="width: 10px;"><?=$rn?></td>
                                            
                                            <td>
                                            <a href="<?=Base_url()?>home/urundetay/<?=$rs->Urun_id?>" >
                                            <img src="<?=base_url()?>upload/<?=$rs->urunresim?>" height="50" width="250"> </a>
                                            </td>
                                            <td><?=$rs->urunadi?></td>
                                            <td><?=$rs->satfiyat?></td>
                                            <td><?=$rs->Adet?></td>
                                            <td><?=($rs->satfiyat * $rs->Adet)?> TL</td>
                                            <td><a href="<?=base_url() ?>Uye/sepet_sil/<?=$rs->Id?>" onclick="return confirm('Üye Silinecek Emin Misin?')" class="btn btn-danger">Sil</a></td>
                                        </tr>
                                       
                                      <?php }?>
                                    </tbody>
                                </table>
                                Toplam : <?=$toplam?> TL
                                <hr>
                                <form method="post" action="<?=base_url()?>Uye/satin_al">
                                    <input type="hidden" name="toplam" value="<?=$toplam?>"></input>
                                    <button type="submit" class="btn btn-success" value="Sepete Ekle" >Satin Al</button>
                                </form>
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