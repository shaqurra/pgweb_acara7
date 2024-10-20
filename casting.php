<!DOCTYPE html>
<html>
<body>

<pre>
<?php
// Definisikan beberapa variabel dengan tipe data berbeda
$o  = 42;         // Integer baru
$p = 3.1415;   // Float baru
$q = "hallo brow"; // String baru
$r = true;     // Boolean baru
$s = NULL;      // NULL

$o = (string) $o;
$p = (string) $p;
$q = (string) $q;
$r = (string) $r;
$s = (string) $s;

// Verifikasi tipe dan nilai dengan var_dump
var_dump($o);
var_dump($p);
var_dump($q);
var_dump($r);
var_dump($s);
?> 
</pre>

<p>
  Dalam PHP, konversi tipe dilakukan secara otomatis atau dengan cast manual. <br>
  Saat boolean diubah menjadi string, `true` akan menjadi "1" sedangkan `false` menjadi string kosong "". <br>
  Untuk tipe NULL, konversi menjadi string menghasilkan string kosong "".
</p>

</body>
</html>
