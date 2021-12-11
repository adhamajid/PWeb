<?php
    include 'koneksi.php'; // Mengarah kepada file/proses koneksi
?>

<h3>Form Pencarian DATA KHS Dengan PHP </h3>
    <form action="" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>

<?php
    if(isset($_GET['cari'])){ //fungsi memeriksa sebuah inputan
        $cari = $_GET['cari']; //variabel cari/proses melakukan pencarian
        echo "<b>Hasil pencarian : ".$cari."</b>"; //hasil dari proses variabel cari
}

?>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Kode MK</th>
        <th>Nilai</th>
    </tr>

<?php
    if(isset($_GET['cari'])){ //fungsi memeriksa sebuah inputan
        $cari = $_GET['cari']; //variabel cari/proses melakukan pencarian
        $sql="select * from KHS where nim like'%".$cari."%'";//variabel sql dengan syntax akan mencari nim dari database mahasiswa
        $tampil = mysqli_query($con,$sql); //Untuk mengirimkan perintah query, terdiri dari dua parameter yaitu koneksi, dan SQL
    }else{
        $sql="select * from KHS"; //variabel sql dengan syntax menampilkan dari database KHS
        $tampil = mysqli_query($con,$sql); //Untuk mengirimkan perintah query, terdiri dari dua parameter yaitu koneksi, dan SQL
    }
    $no = 1;
    while($r = mysqli_fetch_array($tampil)){ //Menampilkan dari pemanggilan diatas
?>

    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $r['NIM']; ?></td>
        <td><?php echo $r['kodeMK']; ?></td>
        <td><?php echo $r['nilai']; ?></td>
    </tr>
    <?php } ?>
</table>