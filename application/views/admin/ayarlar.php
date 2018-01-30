<?php 
        $this->load->view('admin/_header');
	$this->load->view('admin/_sidebar');
?>


<div id="page-wrapper">
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#Genel" data-toggle="tab" aria-expanded="false">Genel</a>
                                </li>
                                <li class=""><a href="#E-mail" data-toggle="tab" aria-expanded="false">E-mail</a>
                                </li>
                                <li class=""><a href="#Sosyal" data-toggle="tab" aria-expanded="true">Sosyal Medya</a>
                                </li>
                                <li class=""><a href="#Hakkımızda" data-toggle="tab" aria-expanded="false">Hakkımızda</a>
                                </li>
                                <li class=""><a href="#İletişim" data-toggle="tab" aria-expanded="false">İletişim</a>
                                </li>
                            </ul>
                            <form method="post" action="<?=base_url()?>Admin/Ayarlar/guncelle/<?=$veri[0]->Id?>" >
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane  fade active in" id="Genel">
                                    <h4>Genel Ayarlar</h4>
                                    <div class="form-group" >
                                        <label id="metin adi">adi</label>
                                        <input type="text" class="form-control" id="adi" name="adi" value="<?=$veri[0]->Ad?>" >
                                             </div>
                                              <div class="form-group">
                                        <label id="kategori">keywords</label>
                                        <input type="text" class="form-control" id="keywords" name="keywords" value="<?=$veri[0]->Keywords?>">
                                              </div>
                                              <div class="form-group">
                                         <label id="konu">description</label>
                                         <input type="text" class="form-control" id="description" name="description" value="<?=$veri[0]->Description?>">
                                              </div>   
                                           <div class="form-group">
                                         <label id="resim">email</label>
                                         <input type="text" class="form-control" id="email" name="email" value="<?=$veri[0]->Email?>">
                                              </div> 
                                           <div class="form-group">
                                         <label id="galeri">adres</label>
                                         <input type="text" class="form-control" id="adres" name="adres" value="<?=$veri[0]->Adres?>">
                                              </div> 
                                           <div class="form-group">
                                         <label id="tarih">telefon</label>
                                         <input type="text" class="form-control" id="telefon" name="telefon" value="<?=$veri[0]->Tel?>">
                                              </div> 
                                      <div class="form-group">
                                         <label id="tarih">Sehir</label>
                                         <input type="text" class="form-control" id="sehir" name="sehir"value="<?=$veri[0]->Sehir?>" >
                                      </div> 
                                   </div>
                                <div class="tab-pane fade" id="E-mail">
                                    <h4>E-mail Ayarları</h4>
                                        <div class="form-group" >
                                        <label id="metin adi">smtpserver</label>
                                        <input type="text" class="form-control" id="smtpserver" name="smtpserver" value="<?=$veri[0]->smtpserver?>">
                                             </div>
                                              <div class="form-group">
                                        <label id="kategori">smtpemail</label>
                                        <input type="text" class="form-control" id="smtpemail" name="smtpemail" value="<?=$veri[0]->smtpemail?>">
                                              </div>
                                          
                                              <div class="form-group">
                                         <label id="konu">port</label>
                                         <input type="text" class="form-control" id="port" name="port" value="<?=$veri[0]->smtpport?>">
                                              </div>   
                                           <div class="form-group">
                                         <label id="resim">sifre</label>
                                         <input type="text" class="form-control" id="resim" name="sifre" value="<?=$veri[0]->Password?>">
                                              </div> 
                                    </div>
                                <div class="tab-pane fade" id="Sosyal">
                                    <h4>Sosyal Medya Hesapları</h4>
                                        <div class="form-group" >
                                        <label id="metin adi">facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$veri[0]->Facebook?>">
                                             </div>
                                             
                                              <div class="form-group">
                                         <label id="konu">twitter</label>
                                         <input type="text" class="form-control" id="konu" name="twitter" value="<?=$veri[0]->Twitter?>">
                                              </div>   
                                           <div class="form-group">
                                         <label id="resim">pinterest</label>
                                         <input type="text" class="form-control" id="resim" name="pinterest" >
                                              </div> 
                                   </div>
                                <div class="tab-pane fade" id="Hakkımızda">
                                    <h4>Hakkımızda Ayarları</h4>
                               
                                       <div class="form-group " >
                                            <label for="inputEmail3" class="control-label" ></label><br>

                                              <textarea name="hakkimizda"><?=$veri[0]->Hakkimizda?></textarea>

                                            </div>
                                         
                                </div>
                                <div class="tab-pane fade" id="İletişim">
                                    <h4>İletişim Ayarları</h4>
                                    <div class="form-group " >
                                            <label for="inputEmail3" class="control-label"></label><br>

                                              <textarea name="iletisim"><?=$veri[0]->Iletisim?> </textarea>

                                            </div>
                                     
                                </div>
                               
                            </div>
                               <button type="submit" class="btn btn-primary">Güncelle</button>
                            </form>
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
<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>

<script>
    $(function (){
        CKEDITOR.replace('hakkimizda')
        $('.textarea').wysihtml5()
    } )
</script>
<script>
                                         $(function (){
                                        CKEDITOR.replace('iletisim')
                                        $('.textarea').wysihtml5()
                                    } )
</script>
