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
                <a href="#" id="1" class=""><i class="si si-clock"></i><span id="b" class="sidebar-mini-hide">Presensi</span></a>
            </li>
            <li>
                <a href="#" id="2" class=""><i class="si si-wrench"></i><span id="c" class="sidebar-mini-hide">Peminjaman Alat</span></a>
            </li>
            <li>
                <a href="#" id="3" class=""><i class="si si-book-open"></i><span id="d" class="sidebar-mini-hide">Monitoring Tugas Akhir</span></a>
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
                            <h3 class="block-title">Manajemen User Dosen <small></small></h3>
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

    //data peternak
    function data_ternak() {
    ?>
        <!-- beranda -->
        <?php 
            $ayam=new ayam;
            $koneksi=$ayam->koneksi();

            $user=$_SESSION['username'];
            $q=mysqli_query($koneksi,"SELECT tgl,waktu,suhu_1,kelembapan_1,suhu_2,kelembapan_2,suhu_3,kelembapan_3,jml_ayam FROM kondisi_kandang WHERE kd_peternak='$user' ORDER BY tgl AND waktu DESC");
            $d=mysqli_fetch_row($q);
            $tgl=$d['0'];
            $waktu=$d['1'];
            $suhu1=$d['2'];
            $suhu2=$d['4'];
            $suhu3=$d['6'];
            $lembab1=$d['3'];
            $lembab2=$d['5'];
            $lembab3=$d['7'];
            $jml=$d['8'];
        ?>
        <div class="row oy1">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Suhu Kandang 1</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-success"><?php echo $suhu1 ?></h1>
                                <div class="stat-percent font-bold text-success">&deg;C</div>
                                <small>
                                    Suhu hari ini 
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Suhu Kandang 2</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-info"><?php echo $suhu2 ?></h1>
                                <div class="stat-percent font-bold text-info">&deg;C</div>
                                <small>Suhu Hari ini</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Suhu Kandang 3</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-navy"><?php echo $suhu3 ?></h1>
                                <div class="stat-percent font-bold text-navy">&deg;C</div>
                                <small>Suhu Hari ini</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Kelembapan Kandang 1</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-success"><?php echo $lembab1 ?> %</h1>
                                <div class="stat-percent font-bold text-success">pH <i class="fa fa-tint"></i></div>
                                <small>Kelembapan hari ini</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Kelembapan Kandang 2</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-info text-info"><?php echo $lembab2 ?> %</h1>
                                <div class="stat-percent font-bold text-info">pH <i class="fa fa-tint"></i></div>
                                <small>Kelembapan hari ini</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Kelembapan Kandang 3</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-navy"><?php echo $lembab3 ?> %</h1>
                                <div class="stat-percent font-bold text-navy">pH <i class="fa fa-tint"></i></div>
                                <small>Kelembapan hari ini</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right"><?php echo date('l, d-m-Y')?></span>
                                <h5>Jumlah Ayam</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins text-danger"><?php echo $jml ?></h1>
                                <div class="stat-percent font-bold text-danger">Ekor <i class="fa fa-level-down"></i></div>
                                <small>Ayam sehat</small>
                            </div>
                        </div>
            </div>
        </div>
        <!-- man kandang -->
        <div class="row oy3">
        <?php 
            $ayam=new ayam;
            $koneksi=$ayam->koneksi();
        ?>
        <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Kandang Aplikasi Peternak Ayam</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example"  id="login_data">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Suhu Kd 1</th>
                        <th>Kelembapan Kd 1</th>
                        <th>Suhu Kd 2</th>
                        <th>Kelembapan Kd 2</th>
                        <th>Suhu 3</th>
                        <th>Kelembapan Kd 3</th>
                        <th>jumlah</th>
                        <th>foto</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $user=$_SESSION['username'];
						$q=mysqli_query($koneksi,"SELECT tgl,waktu,suhu_1,kelembapan_1,suhu_2,kelembapan_2,suhu_3,kelembapan_3,jml_ayam,foto_ayam FROM kondisi_kandang WHERE kd_peternak='$user' ORDER BY tgl DESC");
						while($d=mysqli_fetch_row($q)){
						echo "<tr>
                            <td>$d[0]</td>
                            <td>$d[1]</td>
                            <td>$d[2]</td>
                            <td>$d[3]</td>
                            <td>$d[4]</td>
                            <td>$d[5]</td>
                            <td>$d[6]</td>
                            <td>$d[7]</td>
                            <td>$d[8]</td>
                            <td><img src='$d[9]'></td>
                            </tr>";
                        }
                    ?>
                    </tbody>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- input barang -->
        <div class="row oy2">
                <div class="col-lg-12">
                <?php
                $ayam=new ayam;
                $koneksi=$ayam->koneksi();

                $user=$_SESSION['username'];

                $q=mysqli_query($koneksi, "SELECT stok,harga FROM login WHERE username='$user'");
						$d=mysqli_fetch_row($q);
						$stok=$d[0];
						$harga=$d[1];
                
				if(isset($_POST['tombol'])){			
                        $stok=$_POST['stok'];
                        $harga=$_POST['harga'];
                        mysqli_query($koneksi,"UPDATE login SET stok='$stok',harga='$harga' WHERE username='$user'");
				
					if(mysqli_affected_rows($koneksi)>0) {
						echo "<div class=\"alert alert-success alert-dismissible\">
						<button aria-hidden=true data-dismiss=alert class=close type=button>×</button>
						<strong>Berhasil!</strong> Diubah...
						</div>";
					}
					else{
						echo "<div class=\"alert alert-danger alert-dismissible\">
						<button aria-hidden=true data-dismiss=alert class=close type=button>×</button>
						<strong>Gagal!</strong> Diubah...
						</div>";
					}
				
				}
				?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Ubah Data <small>Stok Ayam | Aplikasi Peternak Ayam</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content" style="display:none;" id="up">
                            <form action="" method="post" id="login_form" class="form-horizontal">
                                <?php echo "<input type=hidden name=user value=\"$user\">"; ?>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Stok</label>
                                    <div class="col-sm-10"><div class="input-group m-b"><input type="text" class="form-control" name="stok" id="stok" value="<?php echo $stok ?>"><span class="input-group-addon">ekor</span></div></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Harga</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon">Rp</span> <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $harga ?>"> <span class="input-group-addon">.00</span></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit" name="tombol" >Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Transaksi Aplikasi Peternak Ayam</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example"  id="transaksi_data">
                    <thead>
                    <tr>
                        <th>Pemesan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Proses</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    
						$q=mysqli_query($koneksi,"SELECT id,kd_peternak,kd_penjual,tgl,waktu,jml,harga,total,proses FROM transaksi WHERE kd_peternak='$user' ORDER BY tgl DESC");
						while($d=mysqli_fetch_row($q)){
                            $harga=$ayam->rupiah($d['5']);
                            $total=$ayam->rupiah($d['6']);
						echo "<tr>
                            <td>$d[2]</td>
                            <td>$d[3]</td>
                            <td>$d[4]</td>
                            <td>$d[5] ekor</td>
                            <td>$harga</td>
                            <td>$total</td>
                            "; 
                            if($d['8']=='belum') {
                                echo "<td><center><span class=\"label label-warning\">menunggu</span></center></td>
                                    <td><center><button type=button class=\"btn btn-success btn-sm\" name='$d[1]' value='$d[5]' data-pk='$d[0]'>Terima</button> <button type=button class=\"btn btn-danger btn-sm\" data-pk='$d[0]'>Tolak</button></center></td>
                                </tr>";
                            }
                            else if($d['8']=='ya') {
                                echo "<td><center><span class=\"label label-primary\">diterima</span></center></td>
                                    <td><center><button type=button class=\"btn btn-warning btn-sm\" name='$d[1]' value='$d[5]' data-pk='$d[0]'>Batal</button></center></td>
                                </tr>";
                                
                            }
                            else if($d['8']=='tidak') {
                                echo "<td><center><span class=\"label label-danger\">ditolak</span></center></td>
                                <td><center><button type=button class=\"btn btn-success btn-sm\" name='$d[1]' value='$d[5]' data-pk='$d[0]'>Terima</button> <button type=button class=\"btn btn-white btn-sm\" data-pk='$d[0]'>Hapus</button></center></td>
                                </tr>";
                            }
                            else {
                                echo "
                                <td></td>
                                <td></td>
                                </tr>";
                            }
                        }
                    ?>
                    </tbody>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-shopping-cart modal-icon"></i>
                                            <h4 class="modal-title">Transaksi Ayam</h4>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


        <!-- transaksi -->
    <?php
    }

    //data penjual
    function data_jual() {
    ?>
        <!-- beranda barnag -->                        
        <div class="row oy1">
            <?php
            $ayam=new ayam;
            $koneksi=$ayam->koneksi();

            $q=mysqli_query($koneksi,"SELECT username,stok,harga FROM login WHERE id_grup='peternak' ORDER BY username DESC");
			while($d=mysqli_fetch_row($q)){ 
                ?>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ Tidak ada foto ayam ]
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    <?php echo $ayam->rupiah($d[2])?>
                                </span>
                                <small class="text-muted">Produk oleh : <?php echo $d[0]?></small>
                                <a href="#" class="product-name"> Stok : <?php echo $d[1]?> ekor</a>

                                <div class="small m-t-xs">

                                </div>
                                <div class="m-t text-righ">
                                    <!--<a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>

        <!-- beli barang -->
        <div class="row oy2">
                <div class="col-lg-12">
                <?php
                $ayam=new ayam;
                $koneksi=$ayam->koneksi();

                $user=$_SESSION['username'];
				?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pemesanan <small>Ayam Uhuy | Aplikasi Peternak Ayam</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content" style="display:none;" id="up">
                            <form id="order" class="form-horizontal">
                                <?php echo "<input type=hidden name=user id=usr value=\"$user\">"; ?>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Peternak</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="peternak" id="peternak">
                                    <option value="">Pilih Peternak</option>
                                        <?php
                                        $q=mysqli_query($koneksi, "SELECT username,stok,harga FROM login WHERE id_grup='peternak'");
                                         if(mysqli_num_rows($q) > 0) {
                                            while($row = mysqli_fetch_object($q)) {
                                             echo "<option value='".$row->username."'>".$row->username."</option>";
                                            }
                                           }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div id="stok">
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Stok</label>
                                    <div class="col-sm-10"><div class="input-group m-b"><input type="text" class="form-control" name="stok1" value="0" disabled><span class="input-group-addon">ekor</span></div></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Harga</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon">Rp</span> <input type="text" class="form-control" name="harga" value="0" disabled> <span class="input-group-addon">.00</span></div>
                                    </div>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Pembelian</label>
                                    <div class="col-sm-10"><div class="input-group m-b"><input type="text" class="form-control" name="beli" id="beli" ><span class="input-group-addon">ekor</span></div></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button type='button' class="btn btn-primary" >Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Transaksi Aplikasi Peternak Ayam</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example"  id="transaksi_data">
                    <thead>
                    <tr>
                        <th>Peternak</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Proses</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
						$q=mysqli_query($koneksi,"SELECT id,kd_peternak,tgl,waktu,jml,harga,total,proses FROM transaksi WHERE kd_penjual='$user' ORDER BY tgl DESC");
						while($d=mysqli_fetch_row($q)){
                            $harga=$ayam->rupiah($d['5']);
                            $total=$ayam->rupiah($d['6']);
						echo "<tr>
                            <td>$d[1]</td>
                            <td>$d[2]</td>
                            <td>$d[3]</td>
                            <td>$d[4] ekor</td>
                            <td>$harga</td>
                            <td>$total</td>
                            "; 
                            if($d['7']=='belum') {
                                echo "<td><center><span class=\"label label-warning\">menunggu</span></center></td>
                                </tr>";
                            }
                            else if($d['7']=='ya') {
                                echo "<td><center><span class=\"label label-primary\">diterima</span></center></td>
                                </tr>";
                                
                            }
                            else if($d['7']=='tidak') {
                                echo "<td><center><span class=\"label label-danger\">ditolak</span></center></td>
                                </tr>";
                            }
                            else {
                                echo "
                                <td></td>
                                </tr>";
                            }
                        }
                    ?>
                    </tbody>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-shopping-cart modal-icon"></i>
                                            <h4 class="modal-title">Rincian Pemesanan</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php
    }    

    function chartjs1() {
        $ayam=new ayam;
        $koneksi=$ayam->koneksi();
        $username=$_SESSION['username'];

        $q1=mysqli_query($koneksi, "SELECT MONTH(tgl) AS 'bulan', avg(suhu_1) AS 'suhu1', avg(kelembapan_1) AS 'lembab1', avg(suhu_2) AS 'suhu2', avg(kelembapan_2) AS 'lembab2', avg(suhu_3) AS 'suhu3', avg(kelembapan_3) AS 'lembab3' FROM `kondisi_kandang` WHERE kd_peternak='$username' GROUP BY MONTH(tgl)");
        $da=mysqli_fetch_row($q1);
    }
?>