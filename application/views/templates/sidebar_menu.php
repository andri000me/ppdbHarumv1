<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?= base_url('vendor/adminbsb/') ?>images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['username'] ?></div>
                <div class="email">SDIT HARUM</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?= base_url('index.php/auth/logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU UTAMA</li>
                <li class="<?php if ($this->uri->segment(1) == "dash") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('index.php/dash') ?>">
                        <i class="material-icons">home</i>
                        <span>HOME</span>
                    </a>
                </li>
                <!-- <li class="<?php if ($this->uri->segment(2) == "datasiswabaru") {
                                    echo "active";
                                } ?>">
                    <a href="<?= base_url('index.php/admin/datasiswabaru') ?>">
                        <i class="material-icons">mood</i>
                        <span>Siswa Baru</span>
                    </a>
                </li> -->
                <li class="<?php if ($this->uri->segment(1) == "data_siswa") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('data_siswa') ?>">
                        <i class="material-icons">assignment</i>
                        <span>PESERTA PSB</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "ditolak") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('data_siswa/ditolak') ?>">
                        <i class="material-icons">cancel</i>
                        <span>PESERTA DITOLAK</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "akses") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('akses') ?>">
                        <i class="material-icons">vpn_key</i>
                        <span>KODE AKSES</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "kategori") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('kategori') ?>">
                        <i class="material-icons">list</i>
                        <span>kategori</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "nominal") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('nominal') ?>">
                        <i class="material-icons">money</i>
                        <span>Tentukan Nominal</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "setting") {
                                echo "active";
                            } ?>">
                    <a href="<?= base_url('setting') ?>">
                        <i class="material-icons">settings</i>
                        <span>Setting</span>
                    </a>
                </li>



            </ul>
        </div>

        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                SDIT HARUM &copy; 2019 <a href="http://santribaru.com" target="_blank">Malik - Ikrom Dev</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <!-- <div class="form-group">
                                <form action="<?= base_url('setting/kuota') ?>" method="post">
                                    <label for="kuota">Jumlah Kuota</label>
                                    <input class="form-control" type="text" name="kuota" value=" <?= $kuota ?>" />
                                    <button type="submit" style="margin-top:50px" class="btn btn-primary">Terapkan</button>
                                </form>
                            </div> -->
                        </li>
                    </ul>
                    <!-- <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->

</section>

<section class="content">