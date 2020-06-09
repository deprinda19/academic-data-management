<?php
include_once 'koneksi_db.php';

$nrp = $_GET['nrp'];

$mahasiswa = mysqli_query($connection, "DELETE FROM mahasiswa WHERE nrp='$nrp'");

header("Location: index.php");

?>