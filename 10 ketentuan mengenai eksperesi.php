<?php
/* 
contoh 1, bentuk lengkap, SERING DAN UMUM DI GUNAKAN
*/
For ($i = 1; $i <= 10; $i++) {
    Echo $i;
}
Echo "<hr>";
/*
*/
for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo "<hr>";
/*
*/
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
echo "<hr>";
/*
 */
for ($i = 1; $i <= 10; print $i, $i++);
echo "<hr>";
