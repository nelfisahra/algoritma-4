<?php
$kendaraan = array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios');
foreach ($kendaraan as $key => $val) {
	echo ucfirst($key) . ': ' . $val . '<br/>';
}
