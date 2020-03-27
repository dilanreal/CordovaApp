<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $prodi=$_POST['prodi'];
 $fakultas=$_POST['fakultas'];
 $minat=$_POST['minat'];
 $skill=$_POST['skill'];
 $q=mysqli_query($con,"INSERT INTO `mhsw` (`nama`,`nim`,`prodi`,`fakultas`,`minat`,`skill`) VALUES ('$nama','$nim','$prodi','$fakultas','$minat','$skill')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>