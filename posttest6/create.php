<?php
include 'functions.php';

    $nama = $_POST['nama'];
    $baju = $_POST['baju'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_wa = $_POST['no_wa'];
    $foto = $_FILES['foto']['name'];

    if($foto != '') {
        $ekstensi_diperbolehkan = array('png','jpg'); 
        $x = explode('.', $foto); 
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$foto; 
              if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                      move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                        $query = "INSERT INTO pemesanan (nama, baju, jumlah, alamat, email, no_wa, foto) VALUES ('$nama', '$baju', '$jumlah', '$alamat','$email','$no_wa', '$nama_gambar_baru')";
                        $result = mysqli_query($koneksi, $query);
                        if(!$result){
                            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                 " - ".mysqli_error($koneksi));
                        } else {
                          echo "<script>alert('Data berhasil ditambah.');window.location='read.php';</script>";
                        }
      
                  } else {     
                      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='create_menu.php';</script>";
                  }
      } else {
          $query = "INSERT INTO pemesanan (nama, baju, jumlah, alamat, email, no_wa, foto) VALUES ('$nama', '$baju', '$jumlah', '$alamat','$email','$no_wa', null)";
          $result = mysqli_query($koneksi, $query);
          if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
              " - ".mysqli_error($koneksi));
          } else {
              echo "<script>alert('Data berhasil ditambah.');window.location='read.php';</script>";
          }
      }
      ?>
