<?php

    $data = "test data \n";
    $fp = './write_file_php.txt';

    $time_start = microtime(true);
    for($i = 0; $i < 100000; $i++) {
        file_put_contents($fp, $data, FILE_APPEND | FILE_EX | FILE_NB);
    }
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    echo "Process Time: {$time} \n";
