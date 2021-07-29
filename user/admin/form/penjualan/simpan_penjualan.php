<?php 
include "../../../../assets/koneksi.php";
session_start();
$id_produk=$_POST['id_produk'];
$qty=$_POST['qty'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];
$id_cabang = $_SESSION['id_user'];
foreach ($id_produk as $key => $value) {
	if ($qty[$key] !='') {
		$id = $id_produk[$key];
		$q_produk = mysqli_query($conn, "SELECT * from produk where id_produk ='$id'");
		$d_produk = mysqli_fetch_array($q_produk);
		$qty_ok = $qty[$key];
		$produk = $d_produk['nama_produk'];
		$harga_satuan = $d_produk['harga'];
		$q_i = mysqli_query($conn, "INSERT into penjualan set 
			produk='$produk',
			harga_satuan='$harga_satuan',
			qty='$qty_ok',
			tanggal_transaksi='$tgl',
			jam_transaksi='$jam',
			id_cabang='$id_cabang',
			pesan_via='Offline'

			")or die(mysqli_error());
	}

}

	
?>

	<script type="text/javascript">
		alert('Data penjualan berhasil disimpan');
		window.location.href="../../?a=penjualan"
		window.open('http://localhost/TA/Aktif/rajawali_es/user/admin/form/penjualan/print_faktur.php?tgl=<?php echo $tgl ?>&waktu=<?php echo $jam ?>','_blank').focus();

	</script>
