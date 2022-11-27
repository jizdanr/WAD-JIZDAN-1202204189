<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'connector.php';

    // membuat variabel untuk menampung data dari form
    $id = $_POST['id_mobil'];
    $nama_mobil = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto = $_FILES['foto']['name'];
    //cek dulu jika merubah gambar produk jalankan coding ini
    if($foto != "") {
      $ekstensi_diperbolehkan = array('png','jpg','jfif'); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['foto']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../dbimg/'.$foto); //memindah file gambar ke folder gambar
                
            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $query  = "UPDATE 'showroom_jizdan_table' SET 
            'nama_mobil'='$nama_mobil',
            'pemilik_mobil'='$pemilik',
            'merk_mobil'='$merk',
            'tanggal_beli'='$tanggal',
            'deskripsi'='$deskripsi',
            'foto_mobil'='$foto',
            'status_pembayaran'='$status'
            WHERE id_mobil = '$id'";

            $result = mysqli_query($connector, $query);
            // periska query apakah ada error
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($connector).
                      " - ".mysqli_error($connector));
            } else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diupdate.');window.location='ListCar-Jizdan.php';</script>";
            }
          } else {     
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit2.php';</script>";
          }
    //jika tidak ada foto yang diganti      
    } else {
        $query = "UPDATE showroom_jizdan_table SET 
        nama_mobil ='$nama_mobil',
        pemilik_mobil ='$pemilik',
        merk_mobil ='$merk',
        tanggal_beli='$tanggal',
        deskripsi ='$deskripsi',
        foto_mobil ='$foto',
        status_pembayaran ='$status'
        WHERE id_mobil = '$id'";
        
        $result = mysqli_query($connector, $query);
        // periksa query apakah ada error
        if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($connector));
                              //  " - ".mysqli_error($koneksi));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diupdate !!!.');window.location='../ListCar-Jizdan.php';</script>";
        }
    }

 

