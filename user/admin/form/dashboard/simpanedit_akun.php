<?php 
include "../../../../assets/koneksi.php";

session_start();
$id = $_POST['id'];

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

			
	$q1=mysqli_query($conn, "UPDATE kantibmas set 
		password='$password'
		where id_kantibmas='$id'
		
		
		")or die(mysqli_error()); 
?>

	<script type="text/javascript">
		alert('Akun anda berhasil diperbaharui');
		window.location.href="../../"

	</script>