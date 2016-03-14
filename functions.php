<?php
mb_internal_encoding('UTF-8');

$db = mysqli_connect('localhost', 'root', '920212', 'legaltrek');

if(!$db) {
    echo 'NO database';
}

mysqli_set_charset($db, 'utf8');
