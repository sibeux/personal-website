<?php

// define('HOST', 'localhost');
// define('SIBEUX', 'root');
// define('pass', '');
// define('DB', 'web_porto');

define('HOST', 'localhost');
define('SIBEUX', 'sibs6571_cbux'); // Ganti dengan username database hosting
define('pass', '1NvgEHFnwvDN96'); // Ganti dengan password database hosting
define('DB', 'sibs6571_cloud_music'); // Ganti dengan nama database hosting

$db = new mysqli(HOST, SIBEUX, pass, DB);

if ($db->connect_errno) {
    // die('Tidak dapat terhubung ke database');
    echo 'Tidak dapat terhubung ke database';
}