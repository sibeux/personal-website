<?php
if (function_exists('curl_version')) {
    echo "cURL tersedia! Versi: " . curl_version()['version'];
} else {
    echo "cURL TIDAK tersedia di hosting ini.";
}
