<?php 
include "../../../../assets/koneksi.php";

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$pj=$_POST['pj'];

	$q1=mysqli_query($conn, "UPDATE cabang set 
		
		
		 nama_cabang='$nama',
		 pj='$pj',
		 alamat='$alamat',
		 nohp='$nohp'
		 where id_cabang = '$id'
		
		")or die(mysqli_error()); 
?>

	<script type="text/javascript">
		alert('Data cabang  berhasil diperbaharui');
		window.location.href="../../?a=cabang"

	</script>
