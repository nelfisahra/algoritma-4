<?php
// membuat array
$user = [
    "dian",
    "muhar",
    "nelfisahra"
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "nelfi";

// mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";
?>

Hasilnya:
Array
(
    [0] => dian
    [1] => nelfi
    [2] => nelfisahra
)
