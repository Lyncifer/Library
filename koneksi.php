<?php
    // local
    $server='localhost';
    $username='root';
    $password='';
    $database='db_buku';

    // hosting
    // $server='sql300.infinityfree.com';
    // $username='if0_37572185';
    // $password='TKJ4THEWIN';
    // $database='if0_37572185_db_buku';

    $koneksi=mysqli_connect($server,$username,$password,$database) or die ('Hidupkan Server');
?>