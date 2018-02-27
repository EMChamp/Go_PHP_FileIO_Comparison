<?php

    $data = "test data \n";
    $fp = '/Users/rommelsunga/Projects/php_vs_go_write_file/write_file_php.txt';

    $time_start = microtime(true);
    for($i = 0; $i < 100000; $i++) {
        file_put_contents($fp, $data, FILE_APPEND);
    }
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    echo "Process Time: {$time} \n";
