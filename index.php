<?php
    include('confiq.php');
?>

<html>
    <head>
        <title>Sistem Tempahan Bunga </title>
    </head>
    <style>
        h2{
            text-align: center;
            padding-top: 20px;
        }

        body{
            background-color: #C3B1E1;
        }
    </style>

    <body>
        <h2>REKOD Tempahan Pelanggan</h2>
        <center>
            <table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
                <tr>
                <th>NoIC</th>
                <th>NAMA </th>
                <th>NOTEL</th>
                <th>ALAMAT_PENGIRIMAN</th>
                <th>TARIKH</th>
                <th>JUMLAH_TEMPAHAN</th>
                <th>JENIS BUNGA</th>
                <th>PADAM</th>
                <th>UPDATE</th>

                </tr>

                <?php

                $papar=mysqli_query($connect, "SELECT * FROM pelanggan");
                while($row=mysqli_fetch_array($papar)){

                echo"
                <tr>
                <td align='center'>".$row['NOic']."</td>
                <td align='center'>".$row['Nama']."</td>
                <td align='center'>".$row['Notel']."</td>
                <td align='center'>".$row['Alamat_Pengiriman']."</td>
                <td align='center'>".$row['Tarikh']."</td> 
                <td align='center'>".$row['Jumlah_Tempahan']."</td>
                <td align='center'>".$row['Jenis_Bunga']."</td>
                <td align='center'><a href='padam.php?noic=$row[NOic]'>Padam</a></td>
                <td align='center'><a href='kemaskini.php?noic=$row[NOic]'>Kemaskini</a></td>
                </tr>
                ";

                }
                ?>
            </table>
            <p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH ORDER</button></a></p>

            
        </center>
    </body>
</html>

