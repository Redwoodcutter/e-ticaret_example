<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!--/input-group -->
                        </li>
                        <li>
                            <a href="<?=base_url()?>Admin/Home"><i class="fa fa-dashboard fa-fw active"></i>Anasayfa</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Admin/Urunler"><i class="fa fa-bar-chart-o fa-fw"></i>Urunler</a>
                            <!--/.nav-second-level -->
                        </li>
                        <li>
                            
                            <a href="<?=base_url()?>Admin/Uyeler"><i class="fa fa-edit fa-fw"></i>Üyeler</a>
                        </li>
                          <li>
                            <a href="<?=base_url()?>Admin/Ayarlar"><i class="fa fa-table fa-fw"></i>Ayarlar</a>
                        </li>
                        <li>
                            
                            <a href="<?=base_url()?>Admin/Home/kategori"><i class="fa fa-edit fa-fw"></i>Kategori Menusu</a>
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Siparişler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>Admin/Siparisler/liste/Yeni">Bekleyenler</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>Admin/Siparisler/liste/Onaylandi">Onaylananlar</a>
                                </li>
                                 <li>
                                    <a href="<?=base_url()?>Admin/Siparisler/liste/Iptal">İptal Edilen</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>Admin/Siparisler/liste/Kargoda">Kargoda</a>
                                </li>
                               <li>
                                    <a href="<?=base_url()?>Admin/Siparisler/liste/Tamamlandi">Tamamlandı</a>
                                </li>
                            </ul>
                            <!--/.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Yorumlar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>Admin/Yorumlar/liste/Yeni">Yeni Yorumlar</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>Admin/Yorumlar/liste/Onaylandi">Onaylananlar</a>
                                </li>
                                 <li>
                                    <a href="<?=base_url()?>Admin/Yorumlar/liste/Iptal">Silinen Yorumlar</a>
                                </li>
                               
                            </ul>
                            <!--/.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Gelen Kutuları<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="<?=base_url()?>Admin/Yorumlar/mesaj_liste/yeni">Üye Mesajlar Yeni</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>Admin/Yorumlar/mesaj_liste/cevaplandi">Üye Mesajlar Cevaplanan</a>
                                </li>
                                   <li>
                                    <a  href="<?=base_url()?>Admin/Home/bize_yazin">Gelen Kutusu</a>
                                </li>
                            </ul>
                            <!--/.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!--/.sidebar-collapse -->
            </div>
            <!--/.navbar-static-side -->
        </nav>