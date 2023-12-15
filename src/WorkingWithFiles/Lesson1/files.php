<?php
$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
$data = file_put_contents(__DIR__ . '/file3.txt', $data, FILE_APPEND);
