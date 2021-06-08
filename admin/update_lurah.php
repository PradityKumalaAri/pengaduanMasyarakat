<?php
require '../koneksi.php';
$nama = $_POST['nama_lurah'];
$alamat= $_POST['alamat_lurah'];
$id = $_POST['id_lurah'];


$sql = mysqli_query($conn, "update pak_lurah set nama_lurah='$nama',alamat_lurah='$alamat' where id_lurah='$id' ");

if ($sql) {
?>
    <script type="text/javascript">
        alert('Data Berhasil diubah');
        window.location = 'admin.php?url=data_lurah';
    </script>
<?php
}
?>