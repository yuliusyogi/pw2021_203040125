<?php
// Yulius Yogi Yuwono
// 203040125
// https://github.com/yuliusyogi/pw2021_203040125
// Pertemuan 3 - 25 Februari 2021
// Mempelajari mengenai struktur kendali PHP
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
   <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 0 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor;?>
            </tr>
    <?php endfor;?>
</table>


</body>
</html>