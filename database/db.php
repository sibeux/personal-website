<?php

// define('HOST', 'localhost');
// define('SIBEUX', 'root');
// define('pass', '');
// define('DB', 'web_porto');

define('HOST', 'localhost');
define('SIBEUX', 'sibn9212_cbux'); // Ganti dengan username database hosting
define('pass', '1NvgEHFnwvDN96'); // Ganti dengan password database hosting
define('DB', 'sibn9212_cloud_music'); // Ganti dengan nama database hosting

$db = new mysqli(HOST, SIBEUX, pass, DB);

if ($db->connect_errno) {
    // die('Tidak dapat terhubung ke database');
    echo 'Tidak dapat terhubung ke database';
}