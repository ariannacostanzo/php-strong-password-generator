<?php 

//arrays divisi
$numbers = ['1','2','3','4','5','6','7','8','9','0'];
$letters_uppercase = range('A', 'Z');
$letters_lowercase = range('a', 'z');
$symbols = ['!', '.', '?', ',', '@', '#', '$', '%', '^', '&', '*'];

//array che ha tutto
$all_signs = [];
$all_signs = array_merge($numbers , $letters_uppercase , $letters_lowercase , $symbols);

?>