<?php 
$nipErr = $namaErr = $alamatErr = "";
if(isset($_POST['save'])){
	if(!isset($_POST['nip']) || !isset($_POST['nama']) || !isset($_POST['alamat'])){
		if($_POST['nip'] == ""){
		$nipErr = "nip tidak boleh kosong!";
		}
		if($_POST['nama'] == ""){
			$namaErr = "nama tidak boleh kosong!";
		}
		if($_POST['alamat'] == ""){
			$alamatErr = "alamat tidak boleh kosong!";
		}
		
	}else{
		$id = $_GET['id'];
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		

		$query = "INSERT INTO pegawai (nip,nama,alamat) VALUES('$nip', '$nama', '$alamat')";
		$query = "UPDATE pegawai SET nip='$nip', nama='$nama', alamat='$alamat' WHERE id=$id";
		if (mysqli_query($connect, $query)) {
			echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil diubah</div>";
		}else{
			echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal diubah</div>";
		}
	}
}

$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>" class="btn btn-warning mb-3">
	<svg style="width:20px;height:20px" viewBox="0 0 24 24">
    	<path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
	</svg> Back To Data
</a>
<div class="container">
	<form action="" method="post">
		<div class="form-group">
			<label for="inputnip">NIP</label>
			<input type="text" name="nip" class="form-control" id="inputnip" value="<?= $data['nip'] ?>" maxlength="40" required autofocus>
			<small class="text-danger"><?= $nipErr == "" ? "":"* $nipErr " ?></small>
		</div>
		<div class="form-group">
			<label for="inputnama">Nama</label>
			<input type="nama" name="nama" class="form-control" id="inputnama" value="<?= $data['nama'] ?>" maxlength="30" required>
			<small class="text-danger"><?= $namaErr == "" ? "":"* $namaErr" ?></small>
		</div>
		<div class="form-group">
			<label for="inputalamat">Alamat</label>
			<input type="alamat" name="alamat" class="form-control" id="inputalamat" value="<?= $data['alamat'] ?>" maxlength="30" minlength="3" required>
			<small class="text-danger"><?= $alamatErr == "" ? "":"* $alamatErr" ?></small>
		</div>
		
		<input type="submit" class="btn btn-dark m-1" name="save" value="Update Now!">
	</form>
</div>
