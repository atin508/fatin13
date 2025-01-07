<?php
    include('config.php');
?>

<html>
    <head>
        <title>eklinik</title>
    </head>
    <style>
        h2{ 
            text-align: center;
            padding-top: 20px;
        }
        body{
            background-color: #F08080
        }
    </style>
    <body>
        <center>
        <h2>eklinik</h2>

        <table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding:20px;border-top:1px solid black; border-left:2px solid black;p border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">

        <form action="" method="post">

         <tr>
             <td>idpelajar</td><td>:</td><td> <input type="int" name="idpelajar" required><br><br></td>
         </tr>
         <tr>
             <td>namapelajar</td><td>:</td><td> <input type="text" name="namapelajar" required><br><br></td>
         </tr>
         <tr>
             <td>noic</td><td>:</td><td> <input type="text" name="noic" required><br><br></td>
         </tr>
         <tr>
             <td>tarikh</td><td>:</td><td> <input type="text" name="tarikh" required><br><br></td>
         </tr>
         <tr>
              <td>masa</td><td>:</td><td> <input type="time" name="masa" required><br><br></td>
         </tr>
         <tr>
              <td>kelas</td><td>:</td><td> <input type="text" name="kelas" required><br><br></td>
    </tr>
    <tr>
           <td>jenispenyakit</td><td>:</td><td> 
            <select type="text" name="jenispenyakit" required>
            <option value="Demam">Demam</option>
            <option value="Batuk">Batuk</option>
            <option value="Keracunan">Keracunan</option>
            <option value="Lain-lain">Lain-lain</option>
    </select>
    <br>
    <br>
    </td>
    </tr>
    <tr>     
        <td colspan=3><center><input type="Submit" name="hantar" value="Hantar"><br></td>
    </tr>
    </form>
    </table>
    </center>
    </body>
    <!--memproses input yang dimasukkan ke dalam db-->
<?php
    include('config.php');
    if (isset($_POST['hantar'])){

        $idpelajar = $_POST['idpelajar'];
        $namapelajar = $_POST['namapelajar'];
        $noic= $_POST['noic'];
        $tarikh = $_POST['tarikh'];
        $masa = $_POST['masa'];
        $kelas = $_POST['kelas'];
        $jenispenyakit = $_POST['jenispenyakit'];

       
        $edit = mysqli_query($connect, "INSERT INTO pelajar SET namapelajar='$namapelajar', noic='$noic', tarikh='$tarikh', masa='$masa', kelas='$kelas', jenispenyakit='$jenispenyakit', idpelajar='$idpelajar'");

        header('location:index.php');
        }
    ?>
</html>