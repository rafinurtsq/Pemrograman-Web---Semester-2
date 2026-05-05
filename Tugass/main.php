<?php
$hal = isset($_GET['hal']) ? $_GET['hal'] : 'home';

if ($hal == 'home') {
    include_once 'home.php';
} else if ($hal == 'about') {
    include_once 'about.php';
} else if ($hal == 'contact') {
    include_once 'contact.php';
} else if ($hal == 'studies') {
    include_once 'studies.php';
} else if ($hal == 'level') {
    include_once 'level.php';
} else if ($hal == 'login') { // Jalur untuk menu login
    include_once 'login.php';
} else {
    echo "<div class='alert alert-danger'>Halaman tidak ditemukan!</div>";
}
?>