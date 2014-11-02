<?php
header('Content-Type: text/plain');

$versions = [
    0 => 'http://take-weiland.de/some/fancy/url'
];

$version = $_GET['v'];
if (!isset($version)) {
    echo 'err: missing input';
} else if (!is_numeric($version) || ((int) $version) != $version || $version < 0) {
    echo 'err: invalid version';
} else {
    $majorVersion = (int) $version;
    if (!isset($versions[$majorVersion])) {
        echo 'err: unknown version';
    } else {
        echo $versions[$majorVersion];
    }
}