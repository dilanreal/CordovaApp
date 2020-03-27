<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $prodi=$_POST['prodi'];
 $fakultas=$_POST['fakultas'];
 $minat=$_POST['minat'];
 $skill=$_POST['skill'];
 $q=mysqli_query($con,"UPDATE `mhsw` SET `nama`='$nama',`nim`='$nim',`prodi`='$prodi',`fakultas`='$fakultas',`minat`='$minat',`skill`='$skill' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>