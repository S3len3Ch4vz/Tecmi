<?
$permitted_chars = '0123456789';
// Output: 54esmdr0qf
$folio= substr(str_shuffle($permitted_chars), 0, 10);

echo $folio;
?>