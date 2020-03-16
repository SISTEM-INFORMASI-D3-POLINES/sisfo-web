<?php
class sisfo{
	function koneksi() {
		$koneksi=mysqli_connect("localhost","root","","sisfo");
		if(!$koneksi) echo "DISCONNECT";
		return $koneksi;
	}
	function judul_web() {
		echo "SIProTel - Sistem Informasi Prodi Telekomunikasi";
	}
	function user_to_grup($username) {
		$koneksi=$this->koneksi();
		$q=mysqli_query($koneksi, "SELECT level FROM login WHERE no_user=\"$username\"");
		$d=mysqli_fetch_row($q);
		return $d[0];
	}
	function usermhs($username) {
		$koneksi=$this->koneksi();
		$q=mysqli_query($koneksi, "SELECT nama FROM mahasiswa WHERE nim=\"$username\"");
		$d=mysqli_fetch_row($q);
		return $d[0];
	}
	function userdosen($username) {
		$koneksi=$this->koneksi();
		$q=mysqli_query($koneksi, "SELECT nama FROM dosen WHERE nip=\"$username\"");
		$d=mysqli_fetch_row($q);
		return $d[0];
	}
	function userstaff($username) {
		$koneksi=$this->koneksi();
		$q=mysqli_query($koneksi, "SELECT nama FROM staff WHERE nip=\"$username\"");
		$d=mysqli_fetch_row($q);
		return $d[0];
	}
	function rupiah($angka) {
		$hasil_rupiah="Rp ".number_format($angka,2,',','.');
		return $hasil_rupiah;
	}
}
?>