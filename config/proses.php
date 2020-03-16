<?php
include "fungsi.php";
$sisfo=new sisfo;
$koneksi=$sisfo->koneksi();

if(isset($_POST['tombol'])) {
	$tombol=$_POST['tombol'];
	
	if($tombol=="login"){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
		//cek tabel login
		$q=mysqli_query($koneksi, "SELECT no_user FROM login WHERE no_user=\"$username\" AND pass='$password'");
		$j=mysqli_num_rows($q);
		
		if(empty($j)) {
			$msg="nothing";
		}
		else {
			session_start();
			$_SESSION['username']=$username;
			$msg="ada";
		}
		echo json_encode($msg);
	}
	
	else if($tombol=="transaksi"){
		$proses=$_POST['proses'];
		$id=$_POST['id'];

		//cek tabel transaksi
		if($proses=='hapus') {
			$q=mysqli_query($koneksi, "DELETE FROM transaksi WHERE id='$id'");
			
			if(mysqli_affected_rows($koneksi)>0) {
				$msg='ada';
			}
			else {
				$msg="nothing";
			}
		}

		else {
			$q=mysqli_query($koneksi, "UPDATE transaksi SET proses='$proses' WHERE id='$id'");
			if(mysqli_affected_rows($koneksi)>0) {
				if($proses=='ya') {
						$jml=$_POST['jml'];
						$user=$_POST['user'];
						$q=mysqli_query($koneksi, "SELECT stok FROM login WHERE username='$user'");
						$da=mysqli_fetch_row($q);
						$stok=$da['0'];
						$sisa=$stok-$jml;

						$q=mysqli_query($koneksi, "UPDATE login SET stok='$sisa' WHERE username='$user'");
						$msg="ada";
				}
				else if($proses=='belum'){
						$jml=$_POST['jml'];
						$user=$_POST['user'];
						$q=mysqli_query($koneksi, "SELECT stok FROM login WHERE username='$user'");
						$da=mysqli_fetch_row($q);
						$stok=$da['0'];
						$sisa=$stok+$jml;

						$q=mysqli_query($koneksi, "UPDATE login SET stok='$sisa' WHERE username='$user'");
						$msg="ada";
				}
				else {
					$msg="ada";
				}
				
			}
			else {
				$msg="nothing";
			}
		}

		echo json_encode($msg);
	}

	else if($tombol=="beli"){
		$ternak=$_POST['peternak'];
		$jual=$_POST['penjual'];
		$sisa=$_POST['sisa'];
		$beli=$_POST['beli'];
		$harga=$_POST['harga'];
		$total=$_POST['total'];
		
		//cek tabel login
		$q=mysqli_query($koneksi, "INSERT INTO transaksi (`kd_peternak`, `kd_penjual`, `tgl`, `waktu`, `jml`, `harga`, `total`) VALUES ('$ternak','$jual',NOW(),NOW(),'$beli','$harga','$total') ");
	
		if(mysqli_affected_rows($koneksi)>0) {
			$msg="ada";
		}
		else {
			$msg="nothing";
		}
		echo json_encode($msg);
	}
}

else if (isset($_POST['peternak'])) {
	$username=$_POST['peternak'];
	$q1=mysqli_query($koneksi, "SELECT stok,harga FROM login WHERE username='$username'");
	if(mysqli_num_rows($q1) > 0) {
		$da=mysqli_fetch_row($q1);
		$stok=$da['0'];
		$harga=$da['1'];

		?> 
			<div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">Stok</label>
            <div class="col-sm-10"><div class="input-group m-b"><input type="text" class="form-control" name="stok1" id="stok1" value="<?php echo $stok?>" data-pk="<?php echo $stok?>" disabled><span class="input-group-addon">ekor</span></div></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-10"><div class="input-group m-b"><span class="input-group-addon">Rp</span> <input type="text" id="harga" class="form-control" name="harga" value="<?php echo $harga?>" data-pk="<?php echo $harga?>" disabled> <span class="input-group-addon">.00</span></div></div>
            </div>
		<?php
	 }
}

?>