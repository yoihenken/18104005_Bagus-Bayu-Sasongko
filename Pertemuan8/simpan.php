<?php
    include "koneksi.php";
    include "create_message.php";

    //Upload Photo
    $target_dir = "foto/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $error = false;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Declare Bio
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $foto = $target_file;
    
    // Edit Data
    if(isset($_POST['mahasiswa_id'])) {

        // Checking image
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
            $error = false; 
        } else {
            create_message('File is not an image.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            $error = false; 
        }

        if( $_FILES["foto"]["name"] == null){ //jika foto tidak disertakan
            $error = false;
        }else if ($_FILES["foto"]["size"] > 5000000) {
            create_message('Srry, ur file is too large.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            $error = true;
        }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            create_message('Sorry, only JPG, JPEG, PNG & GIF files are allowed.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            $error = true; 
        }

        if ($error == false) {

            //Deklarasi untuk photo
            $sql = "SELECT foto from data where id=".$_POST['mahasiswa_id'];
            $sqlPhoto = $conn->query($sql);
            foreach( $sqlPhoto as $dataPhoto) $sqlPhoto = $dataPhoto;

            // Hapus file foto
            if( $_FILES["foto"]["name"] == null ){
                $foto =  $dataPhoto['foto'];
            }else{
                unlink($sqlPhoto['foto']);
            }
            
            // add foto
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                create_message('The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.','success','check');
                header("location:".$_SERVER['HTTP_REFERER']);
            } 

            //query update
            $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', foto='$foto' WHERE id=".$_POST['mahasiswa_id'];
            $edit = $conn->query($sql);
            
            if($edit) {
                $conn->close();
                create_message('Ubah data berhasil','success','check');
                header("location:".$_SERVER['HTTP_REFERER']);
                exit();
            } else {
                $conn->close();
                create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
                header("location:".$_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    } else {

        // Checking image
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
            $error = false; 
        } else {
            create_message('File is not an image.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            
            $error = false; 
        }
        
        if(file_exists($target_file)){
            create_message('Srry, file already exists.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
        
            $error = true;
        }else if ($_FILES["foto"]["size"] > 5000000) {
            create_message('Srry, ur file is too large.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            
            $error = true;
        }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            create_message('Sorry, only JPG, JPEG, PNG & GIF files are allowed.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            
            $error = true; 
        }else if ($error == true) {
            create_message('Sorry, your file was not uploaded.','danger','warning');
            header("location:".$_SERVER['HTTP_REFERER']);
            
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                create_message('The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.','success','check');
                header("location:".$_SERVER['HTTP_REFERER']);
                
                $sql = "INSERT into data(nama, kelas, alamat, foto) VALUES('$nama','$kelas','$alamat','$foto')";
                $add = $conn->query($sql);
                
                if($add) {
                    $conn->close();
                    create_message('Simpan data berhasil','success','check');
                    header("location:".$_SERVER['HTTP_REFERER']);
                    exit();
                } else {
                    $conn->close();
                    create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
                    header("location:".$_SERVER['HTTP_REFERER']);
                    exit();
                }
            }
        }
    }
?>