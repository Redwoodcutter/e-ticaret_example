<?php
$this->load->view('_header');
?>
<div class="container">
    <div class="row"> <div class="col-md-3 col-md-offset-3"></div>
            <div class="col-md-5 col-md-offset-5">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="margin-top: 20px;" >Oturum Açmak İcin Giris Yapınız</h3>
                    </div>
					
                    <div class="panel-body">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-link">Hata Olustu!</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                            </div>
                        <?php } ?>
                        
                        <form action="<?=base_url()?>Home/login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" required  type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="sifre" name="sifre"  required type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Beni hatırla
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit" >Giris</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<?php 

   $this->load->view('_footer');
?>