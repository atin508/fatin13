<?php
include 'confiq.php';

// Mendapatkan 'angkagiliran' dari URL
$angkagiliran = $_GET['angkagiliran'];

// Memilih data yang berkaitan dengan 'angkagiliran' tertentu
$papar = mysqli_query($connect, "SELECT * FROM subjek WHERE angkagiliran='$angkagiliran'");

if ($res = mysqli_fetch_array($papar)) {
    $angkagiliran = $res['angkagiliran'];
    $namapelajar= $res['namapelajar'];
    $semester = $res['semester'];
    $subjek_1 = $res['subjek_1'];
    $subjek_2 = $res['subjek_2'];
    $subjek_3 = $res['subjek_3'];
} else {
    echo "Data tidak dijumpai.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kemaskini Rekod Pendaftaran Subjek</title>
    <style>
        h2 {
            text-align: center;
            padding-top: 20px;
        }
        body {
            background-color: #7FFFD4;
        }
        table {
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <center>
        <h2>Kemaskini Rekod Pendaftaran Subjek</h2>
        <form method="post" action="pros_kemaskini.php">
            <table border="0" cellpadding="5" cellspacing="1" bgcolor="white">
                <tr>
                    <td>angkagiliran</td>
                    <td>:</td>
                    <td><input type="int" name="angkagiliran" value="<?php echo $angkagiliran; ?>" required></td>
                </tr>
                <tr>
                    <td>namapelajar</td>
                    <td>:</td>
                    <td><input type="varchar" name="namapelajar" value="<?php echo $namapelajar; ?>" required></td>
                </tr>
                <tr>
                    <td>semester</td>
                    <td>:</td>
                    <td><input type="varchar" name="semester" value="<?php echo $semester; ?>" required></td>
                </tr>
                <tr>
                    <td>subjek_1</td>
                    <td>:</td>
                    <td><input type="text" name="subjek_1" value="<?php echo $subjek_1; ?>" required></td>
                </tr>
                <tr>
                    <td>subjek_2</td>
                    <td>:</td>
                    <td><input type="text" name="subjek_2" value="<?php echo $subjek_2; ?>" required></td>
                </tr>
                <tr>
                    <td>subjek_3	</td>
                    <td>:</td>
                    <td><input type="text" name="subjek_3" value="<?php echo $subjek_3; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <input type="submit" name="update" value="Kemaskini">
                    </td>
                </tr>
            </table>
            <br>
            <a href="index.php">Ke Menu Utama</a>
        </form>
    </center>
</body>
</html>

