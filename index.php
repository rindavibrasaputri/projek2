<?php

   require_once('koneksi.php');
   $sql = "SELECT * FROM daftar_sekolah";
   $result = $conn->query($sql);

   $daftar_sekolah = $result->fetch_all(MYSQLI_ASSOC);

   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    <h1>DAFTAR SEKOLAH</h1>
    <table>
        <tr>
            

    
   </body>
   </html>