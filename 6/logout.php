<?php
    //2 proses dibawah ini merupakan fungsi yang dipakai untuk logout dari sistem
    session_start(); //Perintah untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
    session_destroy(); //Perintah untuk menghapus semua session data di server
    echo "Anda telah sukses keluar sistem <b>LOGOUT</b>"; //Ketika klik logout akan ada pemberitahuan bahwa sukses keluar dari sistem
?>