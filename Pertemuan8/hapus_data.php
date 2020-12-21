<?php
    include "koneksi.php";
    include "create_message.php";
    $sql = "SELECT foto from data where id=".$_GET['mahasiswa_id'];
    $sqlDelFile = $conn->query($sql);
    $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];

    if ($conn->query($sql) === TRUE) {
        foreach( $sqlDelFile as $dt) unlink($dt['foto']);
        $conn->close();
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
    } else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
    
?>