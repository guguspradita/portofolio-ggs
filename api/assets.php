<?php
// File: api/assets.php
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$file = $queries['file'];

echo require __DIR__ . '/../' . $file;
