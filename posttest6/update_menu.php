<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <nav class="navtop">
            <div>
                <h1>Order</h1>
                <a href="index.php"><i class="fas fa-home"></i>Home</a>
                <a href="read.php"><i class="fa fa-shopping-cart"></i>Order</a>
            </div>
        </nav>
        <center>
            <h1>Edit <?php echo $data['nama']; ?></h1>
        <center>
            <form method="POST" action="update.php" enctype="multipart/form-data" >
            <section class="base">
                <input name="id" value="<?php echo $data['id']; ?>"  hidden />
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                <label>Nama Makanan</label>
                <input type="text" name="nama_makanan" value="<?php echo $data['nama_makanan']; ?>" />
                <label>Jumlah</label>
                <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>" />
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" />
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $data['email']; ?>" />
                <label>No telp</label>
                <input type="text" name="notelp" required=""value="<?php echo $data['notelp']; ?>" />
                <label>Gambar Produk</label>
                <img src="gambar/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                <input type="file" name="foto" />
                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                <button type="submit">Simpan Perubahan</button>
            </section>
            </form>
    </body>
</html>