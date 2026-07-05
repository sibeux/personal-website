<?php

$ffprobe = "/home/sibs6571/ffmpeg/ffprobe";

echo "<pre>";

echo "=== File Exists ===\n";
var_dump(file_exists($ffprobe));

echo "\n=== Is File ===\n";
var_dump(is_file($ffprobe));

echo "\n=== Is Executable ===\n";
var_dump(is_executable($ffprobe));

echo "\n=== Permissions ===\n";
echo substr(sprintf('%o', fileperms($ffprobe)), -4) . "\n";

echo "\n=== Shell Exec Test ===\n";

$command = escapeshellarg($ffprobe) . " -version 2>&1";
echo "Command:\n$command\n\n";

$output = shell_exec($command);

var_dump($output);

echo "\n=== End ===\n";

echo "</pre>";