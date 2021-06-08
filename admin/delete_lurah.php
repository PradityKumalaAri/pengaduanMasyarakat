<?php
require '../koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($conn, "delete from pak_lurah where id_lurah='$id'");

if ($sql) {
?>
    <script type="text/javascript">
        alert('Data Berhasil dihapus');
        window.location = 'admin.php?url=data_lurah';
    </script>
<?php
}
?>