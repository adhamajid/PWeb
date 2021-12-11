<?php
    include 'koneksi.php'; // Mengarah kepada file/proses koneksi
?>

<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
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
        <th>Nama</th>
    </tr>

<?php
    if(isset($_GET['cari'])){ //fungsi memeriksa sebuah inputan
        $cari = $_GET['cari']; //variabel cari/proses melakukan pencarian
        $sql="select * from mahasiswa where nama like'%".$cari."%'"; //variabel sql dengan syntax akan mencari nama dari database mahasiswa
        $tampil = mysqli_query($con,$sql); //Untuk mengirimkan perintah query, terdiri dari dua parameter yaitu koneksi, dan SQL
    }else{
        $sql="select * from mahasiswa"; //variabel sql dengan syntax menampilkan dari database mahasiswa
        $tampil = mysqli_query($con,$sql); //Untuk mengirimkan perintah query, terdiri dari dua parameter yaitu koneksi, dan SQL
    }
    $no = 1;
    while($r = mysqli_fetch_array($tampil)){ //Menampilkan dari pemanggilan diatas
?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $r['nama']; ?></td>
    </tr>

    <?php } ?>
</table>