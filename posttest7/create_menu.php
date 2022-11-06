<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Create</title>
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
            <h1>Tambah</h1>
        <center>
        <form method="POST" action="create.php" enctype="multipart/form-data" >
        <section class="base">
            <label>Nama</label>
            <input type="text" name="nama" />
            <label  for="baju">Baju</label>
            <select class = "option" type="text" name="baju" id="baju">
            <option value="pilih">-Pilih Tipe Baju-</option>
            <option value="home-kit">Home Kit</option>
            <option value="away-kit">Away Kit</option>
            <option value="third-kit">Third Kit</option>
            <option value="training-wear">Training Wear</option>
            </select>
        <br>
            <label>Jumlah</label>
            <input type="text" name="jumlah" />
            <label>Alamat</label>
            <input type="text" name="alamat" />
            <label>Email</label>
            <input type="text" name="email" />
            <label>No Wa</label>
            <input type="text" name="no_wa" />
            <label>Bukti Identitas</label>
            <input type="file" name="foto" required="" />
            <button type="submit">Create</button>
        </section>
        </form>
    </body>
</html>