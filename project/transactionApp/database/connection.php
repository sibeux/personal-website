<?php

define('HOST', 'localhost');
define('USER', 'sibk1922_cbux');
define('pass', '1NvgEHFnwvDN96');
define('DB', 'sibk1922_pbweb_cashflow');

$db = new mysqli(HOST, USER, pass, DB);

if ($db->connect_errno) {
    die('Tidak dapat terhubung ke database! Silahkan coba lagi nanti.');
}

$db->set_charset('utf8mb4');