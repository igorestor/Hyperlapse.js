<?php

$folder = $_REQUEST['folder'];

$filename = '/path/to/foo.txt';

$folderSave = $_SERVER['DOCUMENT_ROOT'].'/examples/saves/'.$folder;

if (!file_exists($folderSave)) {
    mkdir($folderSave, 0755);
}


$frame = $_REQUEST['frame'];
$pic = explode(',',$_POST['data']);
$pic = str_replace(' ','+',$pic[0]);
$pic = base64_decode($pic);
$file = fopen($folderSave.'/frame_'.$frame.'.png', 'w');

fwrite($file,$pic);
fclose($file);