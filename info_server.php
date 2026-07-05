<?php

$ffprobe = "/home/sibs6571/ffmpeg/ffprobe";

echo "<pre>";

echo "==============================\n";
echo "PHP INFORMATION\n";
echo "==============================\n";

echo "PHP Version : " . PHP_VERSION . "\n";
echo "OS          : " . PHP_OS . "\n";
echo "SAPI        : " . php_sapi_name() . "\n";

echo "\nDisabled Functions:\n";
echo ini_get('disable_functions') ?: "(none)";
echo "\n";

echo "\n==============================\n";
echo "FFPROBE FILE CHECK\n";
echo "==============================\n";

echo "Path : $ffprobe\n\n";

echo "file_exists(): ";
var_dump(file_exists($ffprobe));

echo "is_file(): ";
var_dump(is_file($ffprobe));

echo "is_executable(): ";
var_dump(is_executable($ffprobe));

if (file_exists($ffprobe)) {
    echo "Permissions: " . substr(sprintf('%o', fileperms($ffprobe)), -4) . "\n";
    echo "Size: " . filesize($ffprobe) . " bytes\n";
}

echo "\n==============================\n";
echo "SHELL_EXEC TEST\n";
echo "==============================\n";

$tests = [
    "whoami" => "whoami 2>&1",
    "pwd" => "pwd 2>&1",
    "ls" => "ls 2>&1",
    "ffprobe_version" => escapeshellarg($ffprobe) . " -version 2>&1"
];

foreach ($tests as $name => $cmd) {
    echo "\n[$name]\n";
    echo "Command: $cmd\n";
    $result = shell_exec($cmd);
    var_dump($result);
}

echo "\n==============================\n";
echo "EXEC() TEST\n";
echo "==============================\n";

$output = [];
$return = 0;

exec(escapeshellarg($ffprobe) . " -version 2>&1", $output, $return);

echo "Return Code: $return\n";
echo "Output:\n";
print_r($output);

echo "\n==============================\n";
echo "END\n";
echo "==============================\n";

echo "</pre>";