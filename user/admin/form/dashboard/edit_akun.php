
<?php 

$id=$_SESSION['id_user'];
echo $id;
  $q1 = mysqli_query($conn, "SELECT * from kantibmas as a 
    left join pangkat_kantibmas as b on a.id_pangkat = b.id_pangkat
    left join polsek as c on a.id_polsek = c.id_polsek
    where id_kantibmas='$id'");
  $d1=mysqli_fetch_array($q1);

 ?>
<div class="box-header with-border">
   <h3 class="box-title">Perbaharui Data admin </h3>

  <div class="box-tools pull-right">
    <a href="" class="btn btn-info" >Kembali</a>
  </div>
</div>


<br>

<form action="form/dashboard/simpanedit_akun.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
                  <label>Nama User</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                
                  <input type="text" name="nama" class="form-control" value="<?php echo $d1['nama'] ?>" readonly>
              </div> 
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $d1['nrp'] ?>" readonly>
              </div> 
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" value="<?php echo $d1['password'] ?>">
              </div> 
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah data yang anda masukan sudah benar.?')">Simpan Admin</button>
              </div> 


                
          
</form>