<?php
 if(isset($post['bsimpan'])){
  $simpan = mysqli_query($koneksi, "INSERT INTO dosen (Nip, Nama, Kepakaran)
                                    VALUES ('$_POST[tnip]', '$_POST[tnama]', '$_POST[tkepa]')
  ");
  if($simpan)
  {
    echo "<script>
      alert('Simpan Data Sukses!');
      document.location='TabelDosen.php';
    </script>";
  }
  else {
  echo "<script>
      alert('Simpan Data Gagal!');
      document.location='TabelDosen.php';
    </script>";
}
}

?>

<html>
<head>
	<title>TambahDSN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>



	<div class="container">
	<div class="card mt-7">
  <div class="card-header bg-success text-white">
    Form Input Data Dosen
  </div>
  <div class="card-body">
    <form method="post" action="actionAddDSN.php">
    	<div class="form-group">
    		<label>Nip</label>
    		<input type="text" name="tnip" class="form-control" placeholder="Masukkan 5 digit terakhir Nip anda" required>
    	</div>
    	<div class="form-group">
    		<label>Nama</label>
    		<input type="text" name="tnama" class="form-control" placeholder="Masukkan nama anda" required>
    	</div>
    	<div class="form-group">
    		<label>Kepakaran</label>
    		<input type="text" name="tkepa" class="form-control" placeholder="Masukkan jenis Kepakaran anda" required>
    	</div>

      <button type="submit" class="btn btn-block btn-primary" name="bsimpan">Submit</button>
      <button type="reset" class="btn btn-block btn-danger" name="breset">Reset</button>
      <a href="TabelDosen.php" class="btn btn-block btn-warning">Kembali</a>

    </form>
  </div>
  </div>
</div>

</body>
</html>
