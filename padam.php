<?php

include("config.php");
$Angka_giliran = $_GET["Angka_giliran"];

$row =mysqli_query($connect, "DELETE FROM maklumat WHERE Angka_giliran=$Angka_giliran");
echo "<script>alert('Hapus maklumat berjaya');"
     . "window.location='index.php'</script>";

     ?>