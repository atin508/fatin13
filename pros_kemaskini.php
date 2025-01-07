<?php
include 'confiq.php';

if (isset($_POST['update'])) {
    // Dapatkan data daripada borang
    $angkagiliran = $_POST['angkagiliran'];
    $namapelajar = $_POST['namapelajar'];
    $semester = $_POST['semester'];
    $subjek_1 = $_POST['subjek_1'];
    $subjek_2 = $_POST['subjek_2'];
    $subjek_3 = $_POST['subbjek_3'];
    
    // Pastikan nama jadual adalah betul
    $edit = mysqli_query($connect, "UPDATE subjek SET namapelajar='$namapelajar', semester='$semester', subjek_1='$subjek_1', 
    subjek_2='$subjek_2', subjek_3='$subjek_3' WHERE angkagiliran='$angkagiliran'");

    // Semak jika kemas kini berjaya
    if ($edit) {
        echo "<script>alert('Rekod Berjaya Dikemaskini');
        window.location='index.php'</script>";
    } else {
        echo "<script>alert('Kemas kini gagal. Sila cuba lagi.')</script>";
    }
}
?>

