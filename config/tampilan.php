<?php

    //main menu
    function mainmenu_adm() {
    ?>
        <li>
            <a href="#" id="0" class=""><i class="si si-speedometer"></i><span id="a" class="sidebar-mini-hide">Dashboard</span></a>
        </li>
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span id="b" class="sidebar-mini-hide">Managemen User</span></a>
                <ul>
                    <li>
                        <a id="1" href="#">Managemen User Dosen</a>
                    </li>
                    <li>
                        <a id="2" href="#">Managemen User Mahasiswa</a>
                    </li>
                    <li>
                        <a id="3" href="#">Managemen User Staff</a>
                    </li>
                </ul>
        </li>
	<?php
	}
	function mainmenu_mhs() {
	?>
        <li>
            <a ref="#" id="0" class=""><i class="si si-speedometer"></i><span id="a" class="sidebar-mini-hide">Dashboard</span></a>
        </li>
        <li>
            <a href="?tag=II" id="1" class=""><i class="si si-clock"></i><span id="b" class="sidebar-mini-hide">Presensi Mahasiswa</span></a>
        </li>
        <li>
            <a href="?tag=III" id="2" class=""><i class="si si-wrench"></i><span id="c" class="sidebar-mini-hide">Peminjaman Alat</span></a>
        </li>
        <li>
            <a href="?tag=IV" id="3" class=""><i class="si si-book-open"></i><span id="d" class="sidebar-mini-hide">Monitoring Tugas Akhir</span></a>
        </li>
	<?php
	}
	function mainmenu_dosen() {
	?>
		<li>
            <a href="#" id="0" class=""><i class="si si-speedometer"></i><span id="a" class="sidebar-mini-hide">Dashboard</span></a>
        </li>
        <li>
            <a href="?tag=II" id="1" class=""><i class="si si-clock"></i><span id="b" class="sidebar-mini-hide">Presensi</span></a>
        </li>
        <li>
            <a href="?tag=III" id="2" class=""><i class="si si-wrench"></i><span id="c" class="sidebar-mini-hide">Peminjaman Alat</span></a>
        </li>
        <li>
            <a href="?tag=IV" id="3" class=""><i class="si si-book-open"></i><span id="d" class="sidebar-mini-hide">Monitoring Tugas Akhir</span></a>
        </li>
	<?php
    }
    function mainmenu_staff() {
        ?>
            <li>
                <a href="#" id="0"><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
            </li>
            <li>
                <a href="#" id="1"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Order</span></a>
            </li>
        <?php
    }

    //menu presensi
    function menu_presensi_mhs() {
        ?>
            <li>
                <a href="#" id="0" class=""><i class="si si-speedometer"></i><span id="a" class="sidebar-mini-hide">Dashboard</span></a>
            </li>
            <li>
                <a href="#" id="1" class=""><i class="si si-clock"></i><span id="b" class="sidebar-mini-hide">Manajemen Kehadiran</span></a>
            </li>
            <li>
                <a href="#" id="2" class=""><i class="si si-wrench"></i><span id="c" class="sidebar-mini-hide">Manajemen Jadwal</span></a>
            </li>
        <?php
        }
        function menu_presensi_dosen() {
        ?>
            <li>
                <a href="#" id="0" class=""><i class="si si-speedometer"></i><span id="a" class="sidebar-mini-hide">Dashboard</span></a>
            </li>
            <li>
                <a href="#" id="1" class=""><i class="si si-clock"></i><span id="b" class="sidebar-mini-hide">Manajemen Kehadiran</span></a>
            </li>
            <li>
                <a href="#" id="2" class=""><i class="si si-wrench"></i><span id="c" class="sidebar-mini-hide">Manajemen Jadwal</span></a>
            </li>
        <?php
        }

    //data admin
    function data_adm() {
    ?>
        <!-- beranda -->

        <!-- man usr dosen-->
        <div class="content oy2">
            <div class="row items-push">
        <div class="col-sm-8 col-lg-4 pull-right">
            <button class="btn btn-minw btn-rounded btn-info" type="button">Tambah User</button>
        </div>
        </div>
        <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Manajemen User Dosen<small></small></h3>
                        </div>
                        <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th class="hidden-xs">Email</th>
                                        <th class="hidden-xs" style="width: 15%;">Access</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Roger Hart</td>
                                        <td class="hidden-xs">client1@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Rebecca Gray</td>
                                        <td class="hidden-xs">client2@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-primary">Personal</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Evelyn Willis</td>
                                        <td class="hidden-xs">client3@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="font-w600">Laura Bell</td>
                                        <td class="hidden-xs">client4@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="font-w600">Jack Greene</td>
                                        <td class="hidden-xs">client5@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="font-w600">John Parker</td>
                                        <td class="hidden-xs">client6@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="font-w600">Judy Alvarez</td>
                                        <td class="hidden-xs">client7@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="font-w600">Scott Ruiz</td>
                                        <td class="hidden-xs">client8@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="font-w600">Tiffany Kim</td>
                                        <td class="hidden-xs">client9@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="font-w600">Joshua Munoz</td>
                                        <td class="hidden-xs">client10@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="font-w600">Dennis Ross</td>
                                        <td class="hidden-xs">client11@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="font-w600">Eugene Burke</td>
                                        <td class="hidden-xs">client12@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">13</td>
                                        <td class="font-w600">Craig Stone</td>
                                        <td class="hidden-xs">client13@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">14</td>
                                        <td class="font-w600">Bruce Edwards</td>
                                        <td class="hidden-xs">client14@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">15</td>
                                        <td class="font-w600">Jeremy Fuller</td>
                                        <td class="hidden-xs">client15@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-primary">Personal</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">16</td>
                                        <td class="font-w600">Ethan Howard</td>
                                        <td class="hidden-xs">client16@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">17</td>
                                        <td class="font-w600">Julia Cole</td>
                                        <td class="hidden-xs">client17@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">18</td>
                                        <td class="font-w600">Roger Hart</td>
                                        <td class="hidden-xs">client18@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">19</td>
                                        <td class="font-w600">Megan Dean</td>
                                        <td class="hidden-xs">client19@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">20</td>
                                        <td class="font-w600">Laura Bell</td>
                                        <td class="hidden-xs">client20@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">21</td>
                                        <td class="font-w600">Bruce Edwards</td>
                                        <td class="hidden-xs">client21@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">22</td>
                                        <td class="font-w600">Eugene Burke</td>
                                        <td class="hidden-xs">client22@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">23</td>
                                        <td class="font-w600">John Parker</td>
                                        <td class="hidden-xs">client23@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">24</td>
                                        <td class="font-w600">Dennis Ross</td>
                                        <td class="hidden-xs">client24@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">25</td>
                                        <td class="font-w600">Amber Walker</td>
                                        <td class="hidden-xs">client25@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">26</td>
                                        <td class="font-w600">Emma Cooper</td>
                                        <td class="hidden-xs">client26@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">27</td>
                                        <td class="font-w600">Joshua Munoz</td>
                                        <td class="hidden-xs">client27@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">28</td>
                                        <td class="font-w600">Judy Alvarez</td>
                                        <td class="hidden-xs">client28@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">29</td>
                                        <td class="font-w600">Walter Fox</td>
                                        <td class="hidden-xs">client29@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">30</td>
                                        <td class="font-w600">Dennis Ross</td>
                                        <td class="hidden-xs">client30@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">31</td>
                                        <td class="font-w600">Walter Fox</td>
                                        <td class="hidden-xs">client31@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">32</td>
                                        <td class="font-w600">Tiffany Kim</td>
                                        <td class="hidden-xs">client32@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">33</td>
                                        <td class="font-w600">Julia Cole</td>
                                        <td class="hidden-xs">client33@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">34</td>
                                        <td class="font-w600">Donald Barnes</td>
                                        <td class="hidden-xs">client34@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">35</td>
                                        <td class="font-w600">Ryan Hall</td>
                                        <td class="hidden-xs">client35@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-primary">Personal</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">36</td>
                                        <td class="font-w600">Scott Ruiz</td>
                                        <td class="hidden-xs">client36@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">37</td>
                                        <td class="font-w600">Walter Fox</td>
                                        <td class="hidden-xs">client37@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">38</td>
                                        <td class="font-w600">Susan Elliott</td>
                                        <td class="hidden-xs">client38@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">39</td>
                                        <td class="font-w600">Emma Cooper</td>
                                        <td class="hidden-xs">client39@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">40</td>
                                        <td class="font-w600">Laura Bell</td>
                                        <td class="hidden-xs">client40@example.com</td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
        <!-- Insert data -->
                    <div class="block block-bordered oy3">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Multiple Columns</h3>
                        </div>
                        <div class="block-content">
                            <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mega-firstname">Firstname</label>
                                                <input class="form-control input-lg" type="text" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="mega-lastname">Lastname</label>
                                                <input class="form-control input-lg" type="text" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-lastname">Username</label>
                                                <input class="form-control input-lg" type="text" id="mega-username" name="mega-username" placeholder="Enter your username..">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-bio">Bio</label>
                                                <textarea class="form-control input-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about yourself.."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-city">Where do you live?</label>
                                                <input class="form-control input-lg" type="text" id="mega-city" name="mega-city" placeholder="Enter your location..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-skills">Skills</label>
                                                <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                                                    <option value="1">HTML</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">JavaScript</option>
                                                    <option value="4">PHP</option>
                                                    <option value="5">Ruby</option>
                                                    <option value="6">Photoshop</option>
                                                    <option value="7">Illustrator</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mega-age">Age</label>
                                                <input class="form-control input-lg" type="text" id="mega-age" name="mega-age" placeholder="Enter your age..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12">Gender</label>
                                            <div class="col-xs-12">
                                                <label class="css-input css-radio css-radio-warning push-10-r">
                                                    <input type="radio" name="mega-gender-group"><span></span> Female
                                                </label>
                                                <label class="css-input css-radio css-radio-warning">
                                                    <input type="radio" name="mega-gender-group"><span></span> Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Complete Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    <?php
    }
?>