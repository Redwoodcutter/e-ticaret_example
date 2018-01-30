<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="<?=$veri[0]->Description?>" content="<?=$veri[0]->Description?>">
    <meta name="<?=$veri[0]->Keywords?>" content="<?=$veri[0]->Keywords?>">
    <meta name="author" content="">

    <title><?=$sayfa?> <?=$veri[0]->Ad?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stlyesheet" href="<?=base_url()?>assets/genel/css/bootstrap-theme.css"/>

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/home/css/shop-homepage.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>

  <body>
      
      <?php 
      $anasayfa=null;
      $hakkimizda=null;
      $kategoriler=null;
      $iletisim=null;
      $bize_yazin=null;
      if($menu=="anasayfa"){
      $anasayfa="active";}
      if($menu=="hakkimizda"){
      $hakkimizda="active";}
      if($menu=="iletisim"){
      $iletisim="active";}
      if($menu=="bize_yazin"){
      $bize_yazin="active";}
       if($menu=="kategoriler"){
      $kategoriler="active";}
       if($menu=="login"){
      $login="active";}
      ?>
      
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
               

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?=$anasayfa?>">
              <a class="nav-link" href="<?=base_url()?>Home">Anasayfa
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?=$hakkimizda?>">
              <a class="nav-link" href="<?=base_url()?>Home/hakkimizda">Hakkımızda </a>
            </li>
            <li class="nav-item <?=$kategoriler?>">
              <a class="nav-link" href="<?=base_url()?>Home/Kategoriler">Kategoriler</a>
            </li>
            <li class="nav-item <?=$bize_yazin?>">
              <a class="nav-link" href="<?=base_url()?>Home/Bize_yazin">Bize Yazın</a>
            </li>
            <li class="nav-item <?=$iletisim?>">
              <a class="nav-link" href="<?=base_url()?>Home/iletisim">İletişim</a>
            </li>
              <?php if(!$this->session->userdata("uye_session")) {?>
              
                 <ul class="navbar-nav ml-auto " >
        <li class="dropdown navbar-nav ml-auto nav-item">
          <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown"><b>Giriş yap</b> <span class="caret"></span></a>
			<ul style="min-width: 250px;padding: 14px 14px 0; overflow:hidden; background-color:rgba(255,255,255,.8);" class="dropdown-menu ">
				<li >
					 <div class="row">
							<div class="col-md-12">
                                                            <div class="container">
                                                                <form class="form" role="form" method="post" action="<?=base_url()?>Home/login" accept-charset="UTF-8">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email " required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2"  name="sifre" placeholder="şifre" required>
                                                                                 <div class="help-block "><a href="">şifremi unuttum?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
										</div>
										
								 </form>
							</div>
							<div class="bottom text-center"><a href="<?=base_url()?>Home/uye_ekle"><b>Üye Ol</b></a>
							</div>
                                                        </div> 
					 </div>
				</li>
			</ul>
             
          </ul>
              <?php }else{ ?>
                <ul class="navbar-nav ml-auto " >
                 <li class="dropdown navbar-nav ml-auto nav-item">
                     <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown"><b><?=$this->session->uye_session["adsoy"] ?></b> <span class="caret"></span></a>
			<ul style="min-width: 250px;padding: 14px 14px 14px 14px; overflow:hidden; background-color:rgba(255,255,255,.8);" class="dropdown-menu ">
                            <li class=" "><a class="dropdown-item" href="<?=base_url()?>Uye/hesabim"> <i class="fa fa-user fa-fw"></i>Hesabım</a></li>
                             <li class=" "><a class="dropdown-item" href="<?=base_url()?>Uye/mesaj_liste"> <i class="fa fa-inbox fa-fw"></i>Gelen Kutusu</a></li>
                            <li class=" "><a class="dropdown-item" href="<?=base_url()?>Uye/Sepetim"> <i class="fa fa-shopping-basket fa-fw"></i>Sepetim <?=$sepet[0]->say?></a></li>
			   <li class=" "><a class="dropdown-item" href="<?=base_url()?>Uye/login_cik"> <i class="fa fa-sign-out fa-fw"></i>Çıkıs Yap</a></li>
			</ul>
                </ul>
              
              <?php } ?>
        </div>
      </div>
    </nav>
  
  